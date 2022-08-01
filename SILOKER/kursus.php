    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220619
        page name               :kursus.php
        logs                    :v1.0 20220619 - create file
                                :v1.0 20220731 - finish file
        [Table of contents]     :1 QUERY                                        Line 18
                                :2 HEADER NAVBAR MENU                           Line 59
                                :3 CONTENT                                      Line 126
                                :   3.1 HIGLIGHT                                Line 128
                                :       3.1.1 IMAGE DENGAN BUTTON DAFTAR        Line 132
                                :       3.1.2 PREV DAN NEXT IMAGE               Line 169
                                :   3.2 EVENT                                   Line 179
                                :       3.2.1 PINDAH PAGE KE CEK TEMPAT         Line 183
                                :       3.2.2 PINDAH PAGE KE PASANG IKLAN       Line 191
                                :4 FOOTER                                       Line 202
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

    //CONTENT HIGHLIGHT
    $query1 = mysqli_query($conn, "SELECT imageRegister,idIklan FROM pasang_iklan ORDER BY RAND() LIMIT 3"); //query tampil 3 row by RANDOM
    $result1 = mysqli_fetch_row($query1);
    $no=0; //nomor untuk index array
    do { //perulangan untuk menyimpan data ke variable
        $no++;
        list($imageRegister,$idIklan)=$result1;
        $image[$no]=$imageRegister; //var untuk memunculkan image
        $link[$no]=$idIklan; //var untuk link ke page DAFTAR berdasarkan IDIKLAN
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
<!-- 3.1 HIGLIGHT -->
    <div class="jpageCon1 container">
        <div id="carousel" class=" carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
<!-- 3.1.1 IMAGE DENGAN BUTTON DAFTAR -->
                <div class="carousel-item active" data-bs-interval="3000">
                    <?php if ($link[1] != '') : ?>
                        <?php echo "<img src='$image[1]' class='highlight'>"; ?>
                        <div class="carousel-caption d-none d-md-block">
                            <?php if($hideMenu != 1) :?>
                                <p><a href="submit.php?idIklan=<?=$link[1]?>">DAFTAR</a></p>
                            <?php endif ?>
                        </div>
                    <?php else : ?>
                        <img src="multimedia/image/LibraryImage/default.jpg" alt="" class="highlight">
                    <?php endif ?>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <?php if ($link[2] != '') : ?>
                        <?php echo "<img src='$image[2]' class='highlight'>"; ?>
                        <div class="carousel-caption d-none d-md-block">
                            <?php if($hideMenu != 1) :?>
                                <p><a href="submit.php?idIklan=<?=$link[2]?>">DAFTAR</a></p>
                            <?php endif ?>
                        </div>
                    <?php else : ?>
                        <img src="multimedia/image/LibraryImage/default.jpg" alt="" class="highlight">
                    <?php endif ?>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <?php if ($link[3] != '') : ?>
                        <?php echo "<img src='$image[3]' class='highlight'>"; ?>
                        <div class="carousel-caption d-none d-md-block">
                            <?php if($hideMenu != 1) :?>
                                <p><a href="submit.php?idIklan=<?=$link[3]?>">DAFTAR</a></p>
                            <?php endif ?>
                        </div>
                    <?php else : ?>
                        <img src="multimedia/image/LibraryImage/default.jpg" alt="" class="highlight">
                    <?php endif ?>
                </div>
<!-- 3.1.2 PREV DAN NEXT IMAGE -->
                <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <img src="multimedia/image/icons/left.png" height="100px" alt="">
                </button>
                <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <img src="multimedia/image/icons/right.png" height="100px" alt="">
                </button>
            </div>
        </div>
    </div>
<!-- 3.2 EVENT -->
    <div class="jpageCon2">
        <div class="container">
            <div class="row justify-content-center text-center">
<!-- 3.2.1 PINDAH PAGE KE CEK TEMPAT -->
                <div class="col-md-4">
                    <h2 class="jText1">KURSUS</h2>
                    <p class="jText2 mb-3">Hanya Dengan Mengikuti Kursus Disini Anda Akan Mendapatkan Bonus Keren. <br> Yuk Belajar!</p>
                    <p class="jText3"><a class="btn btn-outline-secondary" href="cekTempat.php"><img src="multimedia/image/logo/silokerlogo.png" alt="" width="30" height="30" class="d-inline-block align-text-center">CEK TEMPAT</a></p>
                </div>
                <div class="col-md-2 my-3 maskot">
                    <img src="multimedia/image/concept/maskotsiloker.png" alt="">
<!-- 3.2.2 PINDAH PAGE KE PASANG IKLAN -->
                </div>
                <div class="col-md-4">
                    <h2 class="jText1">PERUSAHAAN</h2>
                    <p class="jText2 mb-3">Pasang iklan Kursus agar terhubung dengan orang yang paling potensial. <br> Yuk Pasang!</p>
                    <p class="jText3"><a class="btn btn-outline-secondary" href="pasangIklan.php"><img src="multimedia/image/logo/silokerlogo.png" alt="" width="30" height="30" class="d-inline-block align-text-center">PASANG IKLAN</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 4 FOOTER -->
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