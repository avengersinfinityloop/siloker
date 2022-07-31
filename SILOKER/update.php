    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220713
        page name               :update.php
        logs                    :v1.0 20220713 - create file
                                :v1.0 20220731 - finish file
        [Table of contents]     :1 QUERY                                        Line 22
                                :2 HEADER NAVBAR MENU                           Line 84
                                :3 CONTENT                                      Line 151
                                :   3.1 INFORMATION IKLAN                       Line 155
                                :       3.1.1 INFO                              Line 157
                                :       3.1.2 BANNER                            Line 161
                                :       3.1.3 ISI IKLAN DAN FORM                Line 165
                                :       3.1.4 BUTTON UPDATE                     Line 222
                                :       3.1.5 BUTTON RESET                      Line 224
                                :       3.1.6 BUTTON KEMBALI                    Line 232
                                :4 FOOTER                                       Line 239
    -->

<!-- 1 QUERY -->
<?php
    require "fungsi.php";
    
    //tampilan USER yang sedang LOGIN
    session_start();
    $shareUsername = $_SESSION['username'];
    $nik = cekNik($shareUsername);
    if ($nik == 0) {
        $infoNik = ' - BIO TIDAK LENGKAP!';
    }
    //mendapatkan informasi dari page cekTempat.php untuk idIklan
    $idIklan = $_GET['idIklan']; //menyimpan informasi di variable

    //CONTENT UPDATE AREA
    $info=""; //variable informasi
    $hide = 0; //variable link dengan javascript membuat tampilan menjadi HIDE ketika di update
    $query1 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE idIklan='$idIklan'"); //query menampilkan informasi detail berdasarkan id iklan
    $result1 = mysqli_fetch_array($query1);
    //CONTENT UPDATE AREA >>> UNTUK PEMBANDING DAN MENAMPILKAN APABILA ADA DATA YANG BERUBAH
    $namaKursus1=$result1['namaKursus'];
    $bidang1=$result1['bidang'];
    $harga1=$result1['harga'];
    $wilayah1=$result1['wilayah'];
    $onlineOffline1=$result1['onlineOffline'];
    $imageRegister1=$result1['imageRegister'];
    //CONTENT UPDATE AREA >>> DENGAN MENGGUNAKAN BUTTON UPDATE MAKA IKLAN AKAN TERUPDATE DI DATABASE
    if(isset($_POST['submit'])) {
        $hide = 1;
        $namaKursus2=$_POST['namaKursus'];
        $bidang2=$_POST['bidang'];
        $harga2=$_POST['harga'];
        $wilayah2=$_POST['wilayah'];
        $onlineOffline2=$_POST['onlineOffline'];
        $imageRegister2='multimedia/image/LibraryImage/' . $idIklan . '.jpg';
        $cekIMAGE=basename($_FILES["fileToUpload"]["name"]);
        if($namaKursus2 != $namaKursus1 || $bidang2 != $bidang1 || $harga2 != $harga1 || $wilayah2 != $wilayah1 || $onlineOffline2 != $onlineOffline1 || $cekIMAGE != '') {
            $target_dir = "multimedia/image/LibraryImage/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $newFileName = $target_dir . basename($idIklan.".jpg");
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newFileName);
            $query2 =mysqli_query($conn, "UPDATE pasang_iklan SET namaKursus = '$namaKursus2', bidang='$bidang2', harga='$harga2', wilayah='$wilayah2', onlineOffline='$onlineOffline2', imageRegister='$newFileName', tanggal=CURRENT_DATE WHERE idIklan = $idIklan");
            $info="Update Berhasil, File ". $newFileName. " sudah ter Upload ";
        } else {
            $info="Update Gagal";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURSUS</title>
    <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
    <link rel="stylesheet" href="css/jmr.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- 2 HEADER NAVBAR MENU -->
<div class="">
    <div class=" jpageHeader fixed-top">
        <nav class="container navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="justify-content-start me-3">
                    <img src="multimedia/image/logo/silokerwithtextlogo.png" alt="" width="100" height="30" class="align-text-bottom">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        KURSUS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="kursus.php">MENU</a></li>
                            <li><a class="dropdown-item" href="cekTempat.php">CEK TEMPAT</a></li>
                            <li><a class="dropdown-item" href="pasangIklan.php">PASANG IKLAN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LOKER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="dashloker.php">MENU UTAMA</a></li>
                            <li><a class="dropdown-item" href="loker.php">MAIN LOKER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        BOOTCAMP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.php">ABOUT</a></li>
                            <li><a class="dropdown-item" href="digitalMarketing.php">DIGITAL MARKETING</a></li>
                            <li><a class="dropdown-item" href="fullStackWebDevelopment.php">FULL STACK WEB DEVELOPMENT</a></li>
                            <li><a class="dropdown-item" href="indexBootcamp.php">INDEX BOOTCAMP</a></li>
                            <li><a class="dropdown-item" href="uiUx.php">UI UX</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFILE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profil.php">MENU</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <b class="me-2">
                        <?php if ($shareUsername != '') : ?>
                            <?php echo $shareUsername.$infoNik; ?>
                            <a href='index.php' class="btn">LOGOUT</a>
                        <?php else : ?>
                            <a href='index.php' class="btn">LOGIN</a>
                        <?php endif ?>
                    </b>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- 3 CONTENT -->
<div class="">
    <div class="jpageCon1">
        <div class="container ">
<!-- 3.1 INFORMATION IKLAN -->
            <h4 class="text-center">UPDATE INFORMATION IKLAN</h4>
<!-- 3.1.1 INFO -->
            <h5 class="text-center"><?php echo $info; ?></h5>
            <?php if ($hide != 1) :?>
            <div>
<!-- 3.1.2 BANNER -->
                <div class="text-center"><img class="highlight" src="<?php echo $imageRegister1?>" alt=""></div>
                <form method="post" class="jForm2" enctype="multipart/form-data" action="#">
                <table class="table">
<!-- 3.1.3 ISI IKLAN DAN FORM -->
                    <tr>
                        <td>ID IKLAN</td>
                        <td>:&nbsp <?php echo $result1['idIklan']?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:&nbsp <?php echo $result1['nik']?></td>
                    </tr>
                    <tr>
                        <td>TANGGAL PASANG</td>
                        <td>:&nbsp <?php echo $result1['tanggal']?></td>
                    </tr>
                    <tr>
                        <td>IMAGE</td>
                        <td>:&nbsp <?php echo $result1['imageRegister']?></td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td><input type="text" value="<?php echo $namaKursus1?>" name="namaKursus" max="60" size="60"> </td>
                    </tr>
                    <tr>
                        <td>BIDANG</td>
                        <td><input type="text" value="<?php echo $bidang1?>" name="bidang" max="60" size="60"> </td>
                    </tr>
                    <tr>
                        <td>HARGA</td>
                        <td><input type="text" value="<?php echo $harga1?>" name="harga" max="60" size="60"> </td>
                    </tr>
                    <tr>
                        <td>WILAYAH</td>
                        <td><textarea name="wilayah" cols="62" rows="4" style="resize: none;"><?php echo $wilayah1?></textarea> </td>
                    </tr>
                    <tr>
                        <td>WAKTU</td>
                        <td align="right">
                                <select name="onlineOffline" class="form-select">
                                    <option value="<?php echo $onlineOffline1?>" selected><?php echo $onlineOffline1?></option>
                                    <?php if($onlineOffline1 != "OFFLINE") :?>
                                        <option value="OFFLINE">OFFLINE</option>
                                    <?php endif; ?>
                                    <?php if($onlineOffline1 != "ONLINE") :?>
                                        <option value="ONLINE">ONLINE</option>
                                    <?php endif; ?>
                                    <?php if($onlineOffline1 != "CUSTOM") :?>
                                        <option value="CUSTOM">CUSTOM</option>
                                    <?php endif; ?>
                                </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left">
                            <label for="gambar" class="form-label">IKLAN</label>
                            <input class="form-control" type="file" accept="image/*" name="fileToUpload" id="fileToUpload" ></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
<!-- 3.1.4 BUTTON UPDATE -->
                            <input class="me-3 btn btn-outline-secondary" type="submit" name="submit" value="UPDATE"></input>
<!-- 3.1.5 BUTTON RESET -->
                            <input class="btn btn-outline-secondary" type="reset" value="RESET">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <?php endif; ?>
<!-- 3.1.6 BUTTON KEMBALI -->
            <div class="container text-center my-3">
                <a href="pasangIklan.php"><button class="btn btn-outline-secondary">KEMBALI</button></a>
            </div>
        </div>
    </div>
</div>
<!-- 4. FOOTER -->
<div class="jpageFooter">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe name="footer" scrolling="no" src="footer.html" class="jfooter">404 not found</iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
</script>
</body>
</html>