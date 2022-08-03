<?php

//PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
session_start();
$shareUsername = $_SESSION['username'];

?>

<!-- 
	Created by:
	NIM			: 10121918
	Nama		: Ahmad Nasir
	Kelas		: IF9
	Kelompok	: AIL
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- buat icon -->
    <link rel="shortcut icon" href="/style/images/logo/silokerlogo.png">
    <title>Tabel Peserta Bootcamp</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrapv2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="type/type.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/color/rose.css">
    <link rel="stylesheet" type="text/css" href="css/font/font4.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="navbar bg-white shadow navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand"><a href="index.html"><img src="#" srcset="" class="logo-dark" alt="" /><img src="" srcset="multimedia/image/logo/silokerwithtextlogo.png" style="width: 100%;" class="logo-light" alt="" /></a></div>
                <div class="navbar-other ml-auto order-lg-3">
                    <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
                        <li class="nav-item">
                            <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse offcanvas-nav">
                    <div class="offcanvas-header d-lg-none d-xl-none">
                        <a href=""><img src="#" srcset="" alt="" /></a>
                        <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
                    </div>
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Kursus</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="kursus.php">Menu</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="cekTempat.php">Cek Tempat</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="pasangIklan.php">Pasang Iklan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Loker</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="dashloker.php">Menu Utama</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="loker.php">Main Loker</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Bootcamp</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="indexBootcamp.php">Home Bootcamp</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Our Bootcamp</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="digitalMarketing.php">Digital Marketing</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="uiUx.php">UI/UX Designer</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="fullstackwebdevelopment.php">Full Stack Web Development</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="about.php">About</a>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="tabelPesertaBootcamp.php">Peserta Bootcamp</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="profil.php">Profil</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <?php if ($shareUsername != '') : ?>
                            <?php echo $shareUsername; ?>
                            <a href='index.php' class="btn btn-sm">Logout</a>
                        <?php else : ?>
                            <a href='index.php' class="btn btn-sm">Login</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- table -->
        <div class="space50"></div>
        <div class="text-center">
            <h2 class="title-bg bg-violet color-white">List Peserta Bootcamp</h2>
        </div>
        <br>
        <div class="container-inner d-flex table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>no.HP</th>
                        <th>Kota</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Bootcamp</th>
                        <th>metode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "siloker";

                    // Create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // read all row from database table
                    $sql = "SELECT * FROM pesertabootcamp";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    // read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                <td>" . $row["nik"] . "</td>
                <td>" . $row["namaLengkap"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["noHP"] . "</td>
                <td>" . $row["kota"] . "</td>
                <td>" . $row["alamat"] . "</td>
                <td>" . $row["pekerjaan"] . "</td>
                <td>" . $row["namaBootcamp"] . "</td>
                <td>" . $row["metode"] . "</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='formUpdateBootcamp.php'>Update</a>
                    <a class='btn btn-danger btn-sm' href='deletedb-pesertabootcamp.php?nik=" . $row['nik'] . "'>Delete</a>
                </td>
            </tr>";
                    }

                    $connection->close();
                    ?>
                </tbody>
            </table>
        </div>

        <!-- table -->
    </div>

    <!-- Footer -->
    <div class="space200"></div>
    <div class="space200"></div>
    <footer class="dark-wrapper inverse-text">
        <div class="space100"></div>
        <div class="container p-5">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="dashloker.php" target="_blank">Loker</a></li>
                        <li><a href="kursus.php" target="_blank">Kursus</a></li>
                        <li><a href="indexBootcamp.php" target="_blank">Bootcamp</a></li>
                        <li><a href="profil.php" target="_blank">Profil</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Tentang Kami</h3>
                    <ul>
                        <li><a href="#" target="_blank">Hubungi Kami</a></li>
                        <li><a href="#" target="_blank">FAQ</a></li>
                        <li><a href="#" target="_blank">Kirim Saran</a></li>
                        <li><a href="#" target="_blank">Profil Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <img src="multimedia/image/logo/silokerwithtextlogo.png" width="50%"" alt=" siloker">
                    <p>Cari Lowongan pekerjaan dengan cepat bersama SILOKER.</p>
                    <br>
                    <p><strong>Head Office : </strong>Jl.Haji Dharma Yasa, Blok M-8 Ds.Mandalawangi, Kec.Paseh 40383, Kab.Bandung</p>
                    <p><strong>Jakarta Office : </strong>Jl.Pintu Terbuka, Komplek Gerbang Tertutup,Kec.Sawah Besar,Kota Jakarta Pusat</p>
                </div>
                <div class="align-self-center">
                    <ul>
                        <li type="none">
                            <a href="https://www.facebook.com/Siloker-109697025151643/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/siloker21/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/AvengersLoopIF9" target="_blank"><i class="fa fa-twitter-square"></i></a>
                            <a href="https://www.linkedin.com/in/ail2022" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="mailto:avengersinfinityloop@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="space10"></div>
            <p class="text-center">© 2022 Tifa's Bootcamp. All rights reserved.</p>
            <!-- /.container -->
    </footer>
    <!-- Footer -->

    <!-- Script -->
    <div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </div>
    <!-- Script -->
</body>

</html>