<?php

//PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
session_start();
$shareUsername = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<!-- 
	Created by:
	NIM			: 10121918
	Nama		: Ahmad Nasir
	Kelas		: IF9
	Kelompok	: AIL
 -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- buat icon -->
	<link rel="shortcut icon" href="multimedia/image/logo//silokerlogo.png">
	<title>About</title>
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

		<figure class="cover"><img src="multimedia/image/concept/figure-about.jpg" alt="" /></figure>

		<!-- Pilihan Bootcamp -->
		<div id="" class="container inner">
			<div class="text-center">
				<h2 class="title-bg bg-violet color-white">Our Stories</h2>
			</div>
			<div class="space10"></div>
			<h3 class="display-3 text-center">
				Tifa's Bootcamp adalah salah satu pionir lembaga pendidikan di Indonesia yang memiliki fokus di dunia pendidikan teknologi digital. Perjalanan panjang selama 23 tahun telah menjadi bukti dari komitmen kami untuk selalu melakukan yang terbaik. Terbaik dari segalanya, terbaik dari siapapun.
				Saat ini melalui program pendidikan yang kami miliki, Tifa's Bootcamp telah melahirkan para talenta-talenta baru di bidang digital yang siap untuk berkontribusi di industri teknologi Indonesia maupun secara global.
			</h3>
		</div>
		<!-- Pilihan Bootcamp -->

		<!-- Footer -->
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
	</div>

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