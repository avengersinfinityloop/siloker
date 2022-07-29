    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220623
        page name               :pasangIklan.php
        total                   :??? pages
        logs                    :v1.0 20220623 - create file
                                :v1.0 20220722 - finish file
        [Table of contents]
    -->
    
<?php
    require "fungsi.php";
    
    //PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
    session_start();
    $shareUsername = $_SESSION['username'];
    $nik = cekNik($shareUsername);
    if ($nik == 0) {
        $infoNik = ' = NIK Tidak Ada';
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

    //CONTENT LIST IKLAN BY IDUSER
    $RowPerHalIklan = 5;
    $RowIklan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pasang_iklan WHERE nik = $nik"));
    $HalPerPageIklan = ceil($RowIklan / $RowPerHalIklan);
    $halAktifIklan = (isset($_GET["halIklan"])) ? $_GET["halIklan"] : 1;
    $awalDataIklan = ($RowPerHalIklan * $halAktifIklan)-$RowPerHalIklan;
    $noIklan=$awalDataIklan; //tampilan nomor pada table IKLAN
    $query2 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE nik = $nik ORDER BY tanggal LIMIT $awalDataIklan, $RowPerHalIklan"); //query pada table LIST IKLAN
    //CONTENT LIST IKLAN >>> DENGAN MENGGUNAKAN BUTTON DELETE MAKA AKAN DELETE ROW DI DATABASE
    if(isset($_POST['delete'])){ //berjalan ketika FORM table iklan di delete
        $idDelete = $_POST['delete']; //mengambil data ID
        $query4 = mysqli_query ($conn, "SELECT idIklan FROM daftar_kursus WHERE (idIklan = $idDelete)"); // search apa id terikat di database DAFTAR KURSUS
        $result4 = mysqli_fetch_array($query4);
        $hasilcek = $result4['idIklan']; //hasil search query 4 masuk ke variable
        if ($hasilcek != $idDelete) { //berjalan dengan pengecekan hasil search dan id yang mau di delete
            $query3 = mysqli_query($conn, "DELETE FROM pasang_iklan WHERE idIklan = $idDelete"); //query untuk DELETE dari DATABASE
            // refresh tampilan table LIST IKLAN setelah delete
            $query2 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE nik = $nik ORDER BY tanggal"); 
            $info= "IKLAN dengan IDIKLAN-".$idDelete."  berhasil di hapus!";
        } else {
            $info= "IKLAN dengan IDIKLAN-".$idDelete."  tidak bisa di delete karena ada USER yang sedang mendaftar. Harap DELETE dulu dari LIST DAFTAR!";
        }
    }

    //CONTENT LIST DAFTAR BY IDUSER
    $RowPerHalDaftar = 5;
    $RowDaftar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM daftar_kursus WHERE idIklan IN (SELECT idIklan FROM pasang_iklan WHERE nik = $nik)"));
    $HalPerPageDaftar = ceil($RowDaftar / $RowPerHalDaftar);
    $halAktifDaftar = (isset($_GET["halDaftar"])) ? $_GET["halDaftar"] : 1;
    $awalDataDaftar = ($RowPerHalDaftar * $halAktifDaftar)-$RowPerHalDaftar;
    $noDaftar=$awalDataDaftar; //tampilan nomor pada table LIST DAFTAR
    $query5 = mysqli_query($conn, "SELECT * FROM daftar_kursus WHERE idIklan IN (SELECT idIklan FROM pasang_iklan WHERE nik = $nik) ORDER BY tanggal LIMIT $awalDataDaftar, $RowPerHalDaftar"); //query pada table LIST DAFTAR
    //CONTENT LIST DAFTAR >>> DENGAN MENGGUNAKAN BUTTON DELETE MAKA AKAN DELETE ROW DI DATABASE
    if(isset($_POST['delete2'])){ //berjalan ketika FORM table daftar di delete
        $idDelete = $_POST['delete2']; //mengambil data ID
        $query6 = mysqli_query($conn, "DELETE FROM daftar_kursus WHERE idDaftar = $idDelete"); //query untuk DELETE dari DATABASE
        // refresh tampilan table LIST DAFTAR setelah delete
        $query5 = mysqli_query($conn, "SELECT * FROM daftar_kursus WHERE idIklan IN (SELECT idIklan FROM pasang_iklan WHERE nik = $nik) ORDER BY tanggal"); 
        $info= "DAFTAR dengan ID-".$idDelete."  berhasil di hapus...!";
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
<!-- HEADER -->
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
                        <?php echo $tes; ?>
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
<!-- CONTENT -->
<div class="">
    <!-- FORM -->
    <?php if ($hideMenu != 1) : ?>
    <div class="jpageCon1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <br>
                    <form method="post" class="tableDaftar" enctype="multipart/form-data" action="#">
                    <table class="table">
                        <tr>
                            <td>NAMA KURSUS</td>
                            <td align="right"><input type="text" name="namaKursus" max="60" size="60"></td>
                        </tr>
                            <td>BIDANG</td>
                            <td align="right"><input type="text" name="bidang" max="60" size="60"></td>
                        <tr>
                            <td>HARGA</td>
                            <td align="right"><input type="text" name="harga" max="60" size="60"></td>
                        </tr>
                            <td>WILAYAH</td>
                            <td align="right"><textarea name="wilayah" cols="62" rows="4" style="resize: none;"></textarea></td>
                        </tr>
                        <tr>
                            <td>ONLINE/OFFLINE</td>
                            <td align="right"><input type="text" name="onlineOffline" max="60" size="60"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left">
                                <label for="gambar" class="form-label">IKLAN</label>
                                <input class="form-control" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <a href="kursus.php"><input class="me-3 btn btn-outline-secondary" type="button" value="KEMBALI KE LAPTOP   "></a>
                                <input class="me-3 btn btn-outline-secondary" type="submit" name="submit" value="PASANG"></input>
                                <input class="btn btn-outline-secondary" type="reset" value="RESET">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>INFO :</p>
                            <?php echo $info ;?>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- LIST IKLAN -->
    <div class="jpageCon2">
        <div class="container">
            <h2 align="center">INFORMASI LIST IKLAN  <br> BY ID USER <?php echo $nik ?></h2><br><br>
            <!-- navigasi -->
            <div class="pagination mb-3">
                <?php if($halAktifIklan > 1) : ?>
                    <a class="page-link" href="? halIklan=<?= $halAktifIklan - 1 ?>" >Previous</a>
                <?php else : ?>
                    <a class="page-link" href="" >Previous</a>
                <?php endif; ?>
                <?php for($i = 1; $i <= $HalPerPageIklan; $i++) :?>
                    <?php if( $i == $halAktifIklan) : ?>
                        <a class="page-link" href="?halIklan=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                    <?php else : ?>
                        <a class="page-link" href="?halIklan=<?= $i  ?>"><?= $i  ?></a>
                    <?php endif ; ?>
                <?php endfor; ?>
                <?php if($halAktifIklan < $HalPerPageIklan) : ?>
                    <a class="page-link" href="?halIklan=<?= $halAktifIklan + 1; ?>">Next</a>
                <?php else : ?>
                    <a class="page-link" href="" >Next</a>
                <?php endif; ?>
            </div>
            <table class="table table-bordered table-striped tableIklan">
                <tr>
                    <th width="50px">No</th>
                    <th>idIklan</td>
                    <th width="100px">tanggal</th>
                    <th>namaKursus</th>
                    <th>bidang</th>
                    <th>harga</th>
                    <th>wilayah</th>
                    <th>onlineOffline</th>
                    <th>imageRegister</th>
                    <th>nik</th>
                    <th>Action</th>
                </tr>
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
                    <td><?php echo $result2['imageRegister']?></td>
                    <td><?php echo $result2['nik']?></td>
                    <td width="161px">
                    <form method="post">
                        <button class="btn btn-outline-secondary"><a href="update.php?idIklan=<?=$result2['idIklan']?>">EDIT</a></button>
                        <button type="submit" name="delete" value="<?php echo $result2['idIklan']?>" class="btn btn-outline-secondary">DELETE</button>
                    </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!-- LIST DAFTAR -->
    <div class="jpageCon2">
        <div class="container">
            <h2 align="center">INFORMASI LIST DAFTAR  <br>DARI IKLAN YANG DI BUAT ID USER <?php echo $nik ?></h2><br><br>
            <!-- navigasi -->
            <div class="pagination mb-3">
                <?php if($halAktifDaftar > 1) : ?>
                    <a class="page-link" href="? halDaftar=<?= $halAktifDaftar - 1 ?>" >Previous</a>
                <?php else : ?>
                    <a class="page-link" href="" >Previous</a>
                <?php endif; ?>
                <?php for($i = 1; $i <= $HalPerPageDaftar; $i++) :?>
                    <?php if( $i == $halAktifDaftar) : ?>
                        <a class="page-link" href="?halDaftar=<?= $i  ?>" style="font-weight:bold; color:red;"><?= $i  ?></a>
                    <?php else : ?>
                        <a class="page-link" href="?halDaftar=<?= $i  ?>"><?= $i  ?></a>
                    <?php endif ; ?>
                <?php endfor; ?>
                <?php if($halAktifDaftar < $HalPerPageDaftar) : ?>
                    <a class="page-link" href="?halDaftar=<?= $halAktifDaftar + 1; ?>">Next</a>
                <?php else : ?>
                    <a class="page-link" href="" >Next</a>
                <?php endif; ?>
            </div>
            <table class="table table-bordered table-striped tableIklan">
                <tr>
                    <th width="50px">No</th>
                    <th>idDaftar</td>
                    <th>nik</th>
                    <th>idIklan</th>
                    <th width="100px">tanggal</th>
                    <th>Action</th>
                </tr>
                <?php
                while($result5    =mysqli_fetch_array($query5)){
                $noDaftar++
                ?>
                <tr>
                    <td><?php echo $noDaftar?></td>
                    <td><?php echo $result5['idDaftar']?></td>
                    <td><?php echo $result5['nik']?></td>
                    <td><?php echo $result5['idIklan']?></td>
                    <td><?php echo $result5['tanggal']?></td>
                    <form method="post">
                        <td width="80px"">
                            <button type="submit" name="delete2" value="<?php echo $result5['idDaftar']?>" class="btn btn-outline-secondary">DELETE</button>
                        </td>
                    </form>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <?php else : ?>
    <div class="jpageCon1">
        <div class="container">
            <div class="row">
                <div class="justify-content-center align-items-center">
                    <h1><b>Please Fill In The Complete Bio, Especially NIK!</b></h1>
                    <h1><b>Please Fill In The Complete Bio, Especially NIK!</b></h1>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
</div>
<!-- FOOTER -->
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
<script src="js/jmr.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>