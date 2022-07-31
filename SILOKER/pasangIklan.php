    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220623
        page name               :pasangIklan.php
        logs                    :v1.0 20220623 - create file
                                :v1.0 20220731 - finish file
        [Table of contents]     :1 QUERY                                        Line 32
                                :2 HEADER NAVBAR MENU                           Line 141
                                :3 CONTENT                                      Line 208
                                :   3.1 FORM PASANG IKLAN                       Line 210
                                :       3.1.1 INFO                              Line 246
                                :       3.1.2 BUTTON KEMBALI                    Line 256
                                :       3.1.3 BUTTON PASANG                     Line 258
                                :       3.1.4 BUTTON RESET                      Line 260
                                :   3.2 TABLE PASANG IKLAN                      Line 270
                                :       3.2.1 NAVIGASI                          Line 275
                                :       3.2.2 HEADER                            Line 296
                                :       3.2.3 ISI TABLE                         Line 310
                                :       3.2.4 BUTTON EDIT                       Line 328
                                :       3.2.5 BUTTON DELETE                     Line 330
                                :   3.3 TABLE DAFTAR IKLAN                      Line 342
                                :       3.3.1 NAVIGASI                          Line 357
                                :       3.3.2 HEADER                            Line 379
                                :       3.3.3 ISI TABLE                         Line 391
                                :       3.3.4 BUTTON DELETE                     Line 405
                                :       3.3.5 WARNING BIO TIDAK LENGKAP         Line 421
                                :4 FOOTER                                       Line 435
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
        $hideMenu = 1;
    }

    //CONTENT FORM
    $info=""; //variable informasi
    //CONTENT FORM >>> AUTO GENERATE NO ID PASANG IKLAN DAN NAMA FILE GAMBAR SESUAI DENGAN ID PASANG IKLAN
    $cekmaxID = mysqli_query($conn, "SELECT MAX(idIklan) FROM pasang_iklan"); //mengecek IDIKLAN paling tinggi untuk di buatkan ID baru
    $result = mysqli_fetch_array($cekmaxID); //memasukan query ke dalam variable
    if ($result[0] == null) {
        $nextID = 20001;
    } else {
        $nextID = intval($result[0]) + 1;
    }
    $idIklan = $nextID; //variable untuk daftar ID baru
    $imageRegister ='multimedia/image/LibraryImage/' . $nextID . '.jpg'; //variable untuk path image baru pada ID baru
    //CONTENT FORM >>> DENGAN MENGGUNAKAN BUTTON PASANG MAKA IKLAN AKAN TERDAFTAR DI DATABASE
    if(isset($_POST['submit'])) {
        $namaKursus=$_POST['namaKursus'];
        $bidang=$_POST['bidang'];
        $harga=$_POST['harga'];
        $wilayah=$_POST['wilayah'];
        $onlineOffline=$_POST['onlineOffline'];
        $cekIMAGE=basename($_FILES["fileToUpload"]["name"]);
        if($namaKursus != '' && $bidang != '' && $harga !='' && $wilayah !='' && $onlineOffline !='' && $cekIMAGE != '' ) {
            $query =mysqli_query($conn, "INSERT INTO pasang_iklan (idIklan,namaKursus,bidang,harga,wilayah,onlineOffline,imageRegister,nik) VALUES ('$idIklan','$namaKursus','$bidang','$harga','$wilayah','$onlineOffline','$imageRegister','$nik')");
            $target_dir = "multimedia/image/LibraryImage/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $newFileName = $target_dir . basename($nextID.".jpg");
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newFileName);
            $info= "IKLAN sudah terdaftar. File ". $newFileName. " sudah ter Upload ";
            $query2 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE nik = $nik ORDER BY tanggal");
        } else {
            $info= "Upload Gagal, FORM HARUS DI ISI SEMUA ";
        }
    }

    //CONTENT PASANG IKLAN BY IDUSER
    $RowPerHalIklan = 5;
    $RowIklan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pasang_iklan WHERE nik = $nik"));
    $HalPerPageIklan = ceil($RowIklan / $RowPerHalIklan);
    $halAktifIklan = (isset($_GET["halIklan"])) ? $_GET["halIklan"] : 1;
    $awalDataIklan = ($RowPerHalIklan * $halAktifIklan)-$RowPerHalIklan;
    $noIklan=$awalDataIklan; //tampilan nomor pada table IKLAN
    $query2 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE nik = $nik ORDER BY tanggal LIMIT $awalDataIklan, $RowPerHalIklan"); //query berdasarkan nik yang pasang
    //CONTENT PASANG IKLAN >>> DENGAN MENGGUNAKAN BUTTON DELETE MAKA AKAN DELETE ROW DI DATABASE
    if(isset($_POST['delete'])){ //berjalan ketika FORM table iklan di delete
        $idDelete = $_POST['delete']; //mengambil data ID
        $query4 = mysqli_query ($conn, "SELECT idIklan FROM daftar_kursus WHERE (idIklan = $idDelete)"); // search apa id terikat di database DAFTAR KURSUS
        $result4 = mysqli_fetch_array($query4);
        $hasilcek = $result4['idIklan']; //hasil search query 4 masuk ke variable
        if ($hasilcek != $idDelete) { //berjalan dengan pengecekan hasil search dan id yang mau di delete
            $query3 = mysqli_query($conn, "DELETE FROM pasang_iklan WHERE idIklan = $idDelete"); //query untuk DELETE dari DATABASE
            // refresh tampilan table setelah delete
            $query2 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE nik = $nik ORDER BY tanggal"); 
            $info= "IKLAN dengan IDIKLAN-".$idDelete."  berhasil di hapus!";
        } else {
            $info= "IKLAN dengan IDIKLAN-".$idDelete."  tidak bisa di delete karena ada USER yang sedang mendaftar. Harap DELETE dulu dari LIST DAFTAR!";
        }
    }
    //CONTENT PASANG IKLAN >>> HIDE IF NO ROW
    if (mysqli_num_rows($query2) <= 0) {
        $hideMenu2 = 1;
    }

    //CONTENT DAFTAR IKLAN
    $RowPerHalDaftar = 5;
    $RowDaftar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM daftar_kursus WHERE idIklan IN (SELECT idIklan FROM pasang_iklan WHERE nik = $nik)"));
    $HalPerPageDaftar = ceil($RowDaftar / $RowPerHalDaftar);
    $halAktifDaftar = (isset($_GET["halDaftar"])) ? $_GET["halDaftar"] : 1;
    $awalDataDaftar = ($RowPerHalDaftar * $halAktifDaftar)-$RowPerHalDaftar;
    $noDaftar=$awalDataDaftar; //tampilan nomor
    $query5 = mysqli_query($conn, "SELECT daftar_kursus.idDaftar, daftar_kursus.idIklan, profil.nik, profil.username, daftar_kursus.tanggal, profil.email, profil.hp FROM daftar_kursus INNER JOIN profil ON daftar_kursus.nik = profil.nik WHERE daftar_kursus.idIklan in (SELECT idIklan FROM pasang_iklan WHERE nik = $nik) ORDER BY tanggal LIMIT $awalDataDaftar, $RowPerHalDaftar"); //query
    //CONTENT DAFTAR IKLAN >>> DENGAN MENGGUNAKAN BUTTON DELETE MAKA AKAN DELETE ROW DI DATABASE
    if(isset($_POST['delete2'])){ //berjalan ketika FORM table di delete
        $idDelete = $_POST['delete2']; //mengambil data ID
        $query6 = mysqli_query($conn, "DELETE FROM daftar_kursus WHERE idDaftar = $idDelete"); //query untuk DELETE dari DATABASE
        // refresh tampilan setelah delete
        $query5 = mysqli_query($conn, "SELECT * FROM daftar_kursus WHERE idIklan IN (SELECT idIklan FROM pasang_iklan WHERE nik = $nik) ORDER BY tanggal"); 
        $info= "DAFTAR dengan ID-".$idDelete."  berhasil di hapus...!";
    }
    //CONTENT DAFTAR IKLAN >>> HIDE IF NO ROW
    if (mysqli_num_rows($query5) < 1) {
        $hideMenu3 = 1;
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
<!-- 3.1 FORM PASANG IKLAN-->
<?php if ($hideMenu != 1) : ?>
    <div class="jpageCon1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <form method="post" class="jForm" enctype="multipart/form-data" action="#">
                    <table class="table">
                        <tr>
                            <td>NAMA</td>
                            <td align="right"><input type="text" name="namaKursus" max="60" size="60" class="form-select"></td>
                        </tr>
                            <td>BIDANG</td>
                            <td align="right"><input type="text" name="bidang" max="60" size="60" class="form-select"></td>
                        <tr>
                            <td>HARGA</td>
                            <td align="right"><input type="text" name="harga" max="60" size="60" class="form-select"></td>
                        </tr>
                            <td>WILAYAH</td>
                            <td align="right"><textarea name="wilayah" cols="62" rows="4" style="resize: none;" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>WAKTU</td>
                            <td align="right">
                                <select name="onlineOffline" class="form-select">
                                    <option value="OFFLINE">OFFLINE</option>
                                    <option value="ONLINE">ONLINE</option>
                                    <option value="CUSTOM">CUSTOM</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left">
                                <label for="gambar" class="form-label">IKLAN</label>
                                <input class="form-control" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"></td>
                        </tr>
<!-- 3.1.1 INFO -->
                        <tr>
                            <td colspan="2">
                            <p>INFO :</p>
                            <?php echo $info ;?>
                            <br><br><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
<!-- 3.1.2 BUTTON KEMBALI-->
                                <a href="kursus.php"><input class="me-3 btn btn-outline-secondary" type="button" value="KEMBALI KE LAPTOP   "></a>
<!-- 3.1.3 BUTTON PASANG-->
                                <input class="me-3 btn btn-outline-secondary" type="submit" name="submit" value="PASANG"></input>
<!-- 3.1.4 BUTTON RESET-->
                                <input class="btn btn-outline-secondary" type="reset" value="RESET">
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- 3.2 TABLE PASANG IKLAN -->
    <?php if ($hideMenu2 != 1) : ?>
    <div class="jpageCon2">
        <div class="container jPasangIklan">
            <h2 align="center" class="mt-3">PASANG IKLAN</h2><br><br>
<!-- 3.2.1 NAVIGASI -->
            <div class="pagination mb-3">
                <?php if($halAktifIklan > 1) : ?>
                    <a class="jpagination" href="? halIklan=<?= $halAktifIklan - 1 ?>" >Previous</a>
                <?php else : ?>
                    <a class="jpagination" href="" >Previous</a>
                <?php endif; ?>
                <?php for($i = 1; $i <= $HalPerPageIklan; $i++) :?>
                    <?php if( $i == $halAktifIklan) : ?>
                        <a class="jpagination" href="?halIklan=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                    <?php else : ?>
                        <a class="jpagination" href="?halIklan=<?= $i  ?>"><?= $i  ?></a>
                    <?php endif ; ?>
                <?php endfor; ?>
                <?php if($halAktifIklan < $HalPerPageIklan) : ?>
                    <a class="jpagination" href="?halIklan=<?= $halAktifIklan + 1; ?>">Next</a>
                <?php else : ?>
                    <a class="jpagination" href="" >Next</a>
                <?php endif; ?>
            </div>
            <table class="table table-bordered border-secondary table-light">
<!-- 3.2.2 HEADER -->
                <tr class="table-dark">
                    <th width="50px">NO</th>
                    <th>IDIKLAN</td>
                    <th width="100px">TANGGAL PASANG</th>
                    <th>NAMA</th>
                    <th>BIDANG</th>
                    <th>HARGA</th>
                    <th>WILAYAH</th>
                    <th>WAKTU</th>
                    <th>IMAGE</th>
                    <th>NIK</th>
                    <th width="170px">ACTION</th>
                </tr>
<!-- 3.2.3 ISI TABLE -->
                <?php
                while($result2 = mysqli_fetch_array($query2)){
                $noIklan++
                ?>
                <tr>
                    <td><?php echo $noIklan?></td>
                    <td><?php echo $result2['idIklan']?></td>
                    <td><?php echo $result2['tanggal']?></td>
                    <td><?php echo $result2['namaKursus']?></td>
                    <td><?php echo $result2['bidang']?></td>
                    <td><?php echo $result2['harga']?></td>
                    <td><?php echo $result2['wilayah']?></td>
                    <td><?php echo $result2['onlineOffline']?></td>
                    <td><img src="<?php echo $result2['imageRegister']?>" height="40px" width="auto"></td>
                    <td><?php echo $result2['nik']?></td>
                    <td>
                    <form method="post">
<!-- 3.2.4 BUTTON EDIT -->
                        <button class="btn btn-outline-secondary"><a style="text-decoration:none; color:black;" href="update.php?idIklan=<?=$result2['idIklan']?>">EDIT</a></button>
<!-- 3.2.5 BUTTON DELETE -->
                        <button type="submit" name="delete" value="<?php echo $result2['idIklan']?>" class="btn btn-outline-secondary" style="color:black;">DELETE</button>
                    </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <?php endif ?>
<!-- 3.3 TABLE DAFTAR IKLAN -->
    <?php if ($hideMenu3 != 1) : ?>
    <div class="jpageCon2">
        <div class="container jdaftarIklan text-center">
            <h2 align="center" class="mt-3">DAFTAR IKLAN</h2><br>
            <div class="row justify-content-center">
                <div class="col-xl-3">
                    <div class="maskot2">
                        <img src="multimedia/image/concept/maskotsiloker.png" alt="">
                    </div>
                </div>
                <div class="col-xl-9">
                    <table class="table">
                        <tr>
                            <td colspan="9" align="left">
<!-- 3.3.1 NAVIGASI -->
                                <div class="pagination">
                                    <?php if($halAktifDaftar > 1) : ?>
                                        <a class="jpagination" href="? halDaftar=<?= $halAktifDaftar - 1 ?>" >Previous</a>
                                    <?php else : ?>
                                        <a class="jpagination" href="" >Previous</a>
                                    <?php endif; ?>
                                    <?php for($i = 1; $i <= $HalPerPageDaftar; $i++) :?>
                                        <?php if( $i == $halAktifDaftar) : ?>
                                            <a class="jpagination" href="?halDaftar=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                                        <?php else : ?>
                                            <a class="jpagination" href="?halDaftar=<?= $i  ?>"><?= $i  ?></a>
                                        <?php endif ; ?>
                                    <?php endfor; ?>
                                    <?php if($halAktifDaftar < $HalPerPageDaftar) : ?>
                                        <a class="jpagination" href="?halDaftar=<?= $halAktifDaftar + 1; ?>">Next</a>
                                    <?php else : ?>
                                        <a class="jpagination" href="" >Next</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
<!-- 3.3.2 HEADER -->
                        <tr class="table-dark">
                            <th width="50px">NO</th>
                            <th>ID DAFTAR</td>
                            <th>ID IKLAN</th>
                            <th>NIK</td>
                            <th>USERNAME</td>
                            <th>EMAIL</td>
                            <th>HP</td>
                            <th width="120px">TANGGAL DAFTAR</th>
                            <th width="100px">ACTION</th>
                        </tr>
<!-- 3.3.3 ISI TABLE -->
                        <?php
                        while($result5    =mysqli_fetch_array($query5)){
                        $noDaftar++
                        ?>
                        <tr>
                            <td><?php echo $noDaftar?></td>
                            <td><?php echo $result5['idDaftar']?></td>
                            <td><?php echo $result5['idIklan']?></td>
                            <td><?php echo $result5['nik']?></td>
                            <td><?php echo $result5['username']?></td>
                            <td><?php echo $result5['email']?></td>
                            <td><?php echo $result5['hp']?></td>
                            <td><?php echo $result5['tanggal']?></td>
<!-- 3.3.4 BUTTON DELETE -->
                            <form method="post">
                                <td width="80px"">
                                    <button type="submit" name="delete2" value="<?php echo $result5['idDaftar']?>" class="btn btn-outline-secondary" style="color:black;">DELETE</button>
                                </td>
                            </form>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
<!-- 3.3.5 WARNING BIO TIDAK LENGKAP -->
<?php else : ?>
    <div class="jpageCon1 text-center ">
        <div class="row warningNoNik">
            <div class="col align-self-center">
                BELUM ADA NIK. <br> 
                TOLONG! <br> 
                LENGKAPI BIODATA TERLEBIH DAHULU <br> 
                DI MENU PROFILE.
            </div>
        </div>
    </div>
<?php endif ?>
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
</body>
</html>