    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220619
        page name               :kursus.html
        total                   :??? pages
        logs                    :v1.0 20220619 - create file
                                :v1.0 2022???? - finish file
                                :v1.1 2022???? - finishing  file
        [Table of contents]
    -->

<?php

use LDAP\Result;

    require "fungsi.php";
    
    //TEMPORARI RANDOM LOGIN  USER
    $query2= mysqli_query($conn, "SELECT * FROM profil ORDER BY RAND() LIMIT 1");
    $result2 = mysqli_fetch_array($query2);
    $shareUsername= $result2['nik'];
    //tampilan USER yang sedang LOGIN
    session_start();
    $_SESSION['username'] = $shareUsername;

    //CONTENT HIGHLIGHT
    $query1 = mysqli_query($conn, "SELECT namaKursus,imageRegister,idIklan FROM pasang_iklan ORDER BY RAND() LIMIT 3"); //query tampil 3 row by RANDOM
    $result1 = mysqli_fetch_row($query1);
    $no=0; //nomor untuk index array
    do { //perulangan untuk menyimpan data ke variable
        $no++;
        list($namaKursus,$imageRegister,$idIklan)=$result1;
        $image[$no]=$imageRegister; //var untuk memunculkan image
        $link[$no]=$idIklan; //var untuk link ke page DAFTAR berdasarkan IDIKLAN
        $nama[$no]=$namaKursus; //var untuk nama Kursus berdasarkan IDIKLAN
    }
    while ($result1 = mysqli_fetch_row($query1));
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
        <nav class="container navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>SILOKER</b></a>
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
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <div class="d-flex">
                    <b class="me-2">
                        <?php 
                            if ($shareUsername != '') {
                                echo $shareUsername ;
                            } else {
                                echo "<a href='index.php' class=''>LOGIN</a>";
                            }
                        ?>
                    </b>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- CONTENT -->
<div class="">
    <!-- HIGHLIGHT -->
    <div class="jpageCon1">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <?php echo "<img src='$image[1]' class='highlight'>"; ?>
                    <div class="carousel-caption d-none d-md-block">
                        <?php if ($link[1] != '') : ?>
                            <h1><a href="submit.php?idIklan=<?=$link[1]?>">DAFTAR <?=$nama[1]?></a></h1>
                        <?php else : ?>
                            <h1>EMPTY</h1>
                        <?php endif ?>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <?php echo "<img src='$image[2]' class='highlight'>"; ?>
                    <div class="carousel-caption d-none d-md-block">
                        <?php if ($link[2] != '') : ?>
                            <h1><a href="submit.php?idIklan=<?=$link[2]?>">DAFTAR <?=$nama[2]?></a></h1>
                        <?php else : ?>
                            <h1>EMPTY</h1>
                        <?php endif ?>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <?php echo "<img src='$image[3]' class='highlight'>"; ?>
                    <div class="carousel-caption d-none d-md-block">
                        <?php if ($link[3] != '') : ?>
                            <h1><a href="submit.php?idIklan=<?=$link[3]?>">DAFTAR <?=$nama[3]?></a></h1>
                        <?php else : ?>
                            <h1>EMPTY</h1>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EVENT -->
    <div class="jpageCon2">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6 columns">
                    <h2 class="jText1">KURSUS</h2>
                    <p class="jText2">Hanya Dengan Mengikuti Kursus Disini Anda Akan Mendapatkan Bonus Keren. <br> Yuk Belajar!</p>
                    <p class="jText3"><a class="navbar-brand" href="cekTempat.php"><img src="multimedia/image/LibraryImage/switch.png" alt="" width="30" height="24" class="d-inline-block align-text-top">CEK TEMPAT</a></p>
                </div>
                <div class="col-md-6 columns">
                    <h2 class="jText1">PERUSAHAAN</h2>
                    <p class="jText2">Pasang iklan Kursus agar terhubung dengan orang yang paling potensial. <br> Yuk Pasang!</p>
                    <p class="jText3"><a class="navbar-brand" href="pasangIklan.php"><img src="multimedia/image/LibraryImage/switch.png" alt="" width="30" height="24" class="d-inline-block align-text-top">PASANG IKLAN</a></p>
                </div>
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
<script src="js/jmr.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>