    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220703
        page name               :submit.php
        logs                    :v1.0 20220703 - create file
                                :v1.0 20220731 - finish file
        [Table of contents]     :1 QUERY                                        Line 21
                                :2 HEADER NAVBAR MENU                           Line 83
                                :3 CONTENT                                      Line 150
                                :   3.1 INFORMATION IKLAN                       Line 153
                                :       3.1.1 INFO                              Line 156
                                :       3.1.2 BANNER                            Line 160
                                :       3.1.3 ISI IKLAN                         Line 163
                                :       3.1.4 BUTTON DAFTAR                     Line 201
                                :       3.1.5 BUTTON KEMBALI                    Line 211
                                :4 FOOTER                                       Line 228
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
    //mendapatkan informasi dari page cekTempat.php
    $idIklan = $_GET['idIklan']; //menyimpan informasi ID di variable untuk membuka info detail
    $view = $_GET['view']; //menyimpan informasi apabila hanya view saja

    //CONTENT SUBMIT AREA
    $info=""; //variable informasi
    $hide = 0; //variable link dengan javascript membuat tampilan menjadi HIDE ketika di submit
    $query1 = mysqli_query($conn, "SELECT * FROM pasang_iklan WHERE idIklan='$idIklan'"); //query menampilkan informasi detail berdasarkan id iklan
    $result1 = mysqli_fetch_array($query1);
    //CONTENT SUBMIT AREA >>> AUTO GENERATE NO ID DAFTAR BARU
    $date=date("Y");
    $cekmaxID = mysqli_query($conn, "SELECT MAX(idDaftar) FROM daftar_kursus"); //mengecek IDDAFTAR paling tinggi untuk di buatkan ID baru
    $result2 = mysqli_fetch_array($cekmaxID); //memasukan query ke dalam variable
    if ($result2[0] == null) {
        $nextID = 10001;
    } else {
        $nextID = intval($result2[0]) + 1;
    }
    $idDaftar=$nextID; //variable untuk daftar ID baru
    //CONTENT SUBMIT AREA >>> MENCARI INFORMASI DARIDATABASE APAKAH IKLAN YANG MAU DI DAFTARKAN SUDAH ADA ATAU BELUM BERDASARKAN ID USER YANG SEDANG LOGIN
    $query3 = mysqli_query($conn, "SELECT idIklan FROM daftar_kursus WHERE (idIklan = $idIklan AND nik = $nik)"); // search apa id iklan sudah terdaftar di user tersebut
    $result3 = mysqli_fetch_array($query3);
    if ($result3 != null) { //apabila isi search tidak null maka hasil search masuk ke variable bantu
        $dobleData = $result3['idIklan'];
    } else { //apabila isi search null maka variable bantu menjadi 0
        $dobleData = 0;
    }
    //CONTENT SUBMIT AREA >>> DENGAN MENGGUNAKAN BUTTON DAFTAR MAKA IKLAN AKAN TERDAFTAR DI DATABASE BERDASARKAN USER
    if(isset($_POST['daftar'])){ //berfungsi ketika form di daftar
        $hide = 1;
        if($dobleData != $idIklan) { //berjalan apabila mendapatkan id daftar dan tidak ada iklan yang sudah didaftarkan dengan user yang sama
            $query2 = mysqli_query($conn, "INSERT INTO daftar_kursus (idDaftar,nik,idIklan) VALUES ('$idDaftar','$nik','$idIklan')"); //query untuk memesukan data ke database
            $info = "Success! sudah masuk dalam list dengan IDDAFTAR-".$idDaftar." dan IDIKLAN-".$idIklan.". Silahkan Kembali ";
        } else {
            $info = "Failed! user-".$nik." sudah tidak bisa daftar dari iklan yang sama dengan IDIKLAN-".$idIklan.". Silahkan Kembali ";
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
<!-- 3.1 INFORMATION IKLAN -->
        <div class="container jInfoDaftar">
            <h4 class="text-center">INFORMATION IKLAN</h4>
<!-- 3.1.1 INFO -->
            <h5 class="text-center"><?php echo $info; ?></h5>
            <?php if ($hide != 1) :?>
            <div class="row">
<!-- 3.1.2 BANNER -->
                <div class="col-md-7 text-center"><img src="<?php echo $result1['imageRegister']?>" alt=""></div>
                <div class="col-md-5">
<!-- 3.1.3 ISI IKLAN -->
                    <table class="table">
                        <tr>
                            <td>ID IKLAN</td>
                            <td>: <?php echo $result1['idIklan']?></td>
                        </tr>
                        <tr>
                            <td>TANGGAL PASANG</td>
                            <td>: <?php echo $result1['tanggal']?></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td>: <?php echo $result1['namaKursus']?></td>
                        </tr>
                        <tr>
                            <td>BIDANG</td>
                            <td>: <?php echo $result1['bidang']?></td>
                        </tr>
                        <tr>
                            <td>HARGA</td>
                            <td>: <?php echo $result1['harga']?></td>
                        </tr>
                        <tr>
                            <td>WILAYAH</td>
                            <td>: <?php echo $result1['wilayah']?></td>
                        </tr>
                        <tr>
                            <td>WAKTU</td>
                            <td>: <?php echo $result1['onlineOffline']?></td>
                        </tr>
                        <tr>
                            <td>IMAGE</td>
                            <td>: <?php echo $result1['imageRegister']?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: <?php echo $result1['nik']?></td>
                        </tr>
<!-- 3.1.4 BUTTON DAFTAR -->
                        <?php if ($view != 1) : ?>
                            <tr height="50px">
                                <td colspan="2">
                                    <form method="POST" id="myForm">
                                        <input type="submit" name="daftar" value="DAFTAR" class="btn btn-outline-secondary me-3 ">
                                    </form>
                                </td>
                            </tr>
                        <?php endif ?>
<!-- 3.1.5 BUTTON KEMBALI -->
                        <tr>
                            <td colspan="2">
                                <a href="cekTempat.php"><button class="text-center btn btn-outline-secondary">KEMBALI</button></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php else : ?>
                <div class="text-center">
                    <a href="cekTempat.php"><button class="text-center btn btn-outline-secondary">KEMBALI</button></a>
                </div>
            <?php endif; ?>
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
</body>
</html>