    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220703
        page name               :submit.php
        total                   :??? pages
        logs                    :v1.0 20220703 - create file
                                :v1.0 20220722 - finish file
        [Table of contents]
    -->

<?php
    require "fungsi.php";
    
    //PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
    session_start();
    $shareUsername = $_SESSION['username'];
    $nik = cekNik($shareUsername);
    if(isset($_GET['idIklan'])){ //mendapatkan informasi dari page cekTempat.php untuk idIklan
        $idIklan    =$_GET['idIklan']; //menyimpan informasi di variable
    }
    else {
        die ("Error. No ID Selected!"); //error apabila tidak mendapatkan id
    }

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
    <link rel="icon" href="multimedia/image/icon joy mode.jpeg">
    <link rel="stylesheet" href="css/jmr.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- HEADER -->
<div class="">
    <div class=" jpageHeader fixed-top">
        <nav class="container navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><b>SILOKER</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                            <?php echo $shareUsername." - "; ?>
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
    <!-- SUBMIT AREA-->
    <div class="jpageCon1">
        <div class="container ">
            <h4 class="text-center">SUBMIT INFORMATION DAFTAR KURSUS</h4>
            <h5 class="text-center"><?php echo $info; ?></h5>
            <?php if ($hide != 1) :?>
            <div>
                <div class="text-center"><img class="highlight" src="<?php echo $result1['imageRegister']?>" alt=""></div>
                <table cellpadding="2" style="margin-left: 200px;">
                    <tr>
                        <td>idIklan</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['idIklan']?></td>
                    </tr>
                    <tr>
                        <td>tanggal</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['tanggal']?></td>
                    </tr>
                    <tr>
                        <td>namaKursus</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['namaKursus']?></td>
                    </tr>
                    <tr>
                        <td>bidang</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['bidang']?></td>
                    </tr>
                    <tr>
                        <td>harga</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['harga']?></td>
                    </tr>
                    <tr>
                        <td>wilayah</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['wilayah']?></td>
                    </tr>
                    <tr>
                        <td>onlineOffline</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['onlineOffline']?></td>
                    </tr>
                    <tr>
                        <td>imageRegister</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['imageRegister']?></td>
                    </tr>
                    <tr>
                        <td>nik</td>
                        <td style="padding-left: 50px;">: <?php echo $result1['nik']?></td>
                    </tr>
                    <tr height="50px">
                        <td>
                            <form method="POST" class="my-auto" id="myForm">
                                <input type="submit" name="daftar" value="DAFTAR" class="btn btn-outline-secondary">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <?php endif; ?>
        </div>
        <div class="container text-center my-3">
            <a href="cekTempat.php"><button class="btn btn-outline-secondary">KEMBALI</button></a>
        </div>
    </div>
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
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jmr.js"></script>
<script>
    //JS UNTUK HIDE TAMPILAN KETIKA DI SUBMIT
    var run = <?=json_encode($hide, JSON_HEX_TAG | JSON_HEX_AMP) ?>; //informasi variable dari PHP
    if (run == 1) { //run apabila sudah di submit
        var x = document.getElementById("hide"); //DIV dengan id hide akan menghilang dari mukabumi
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
    }
</script>
</body>
</html>