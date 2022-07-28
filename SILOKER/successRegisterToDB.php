<?php

//PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
session_start();
$shareUsername = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

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
				<div class="navbar-brand"><a href="index.html"><img src="#" srcset="" class="logo-dark" alt="" /><img src="" srcset="multimedia/image/logo/silokerwithtextlogo.png" style="width: 40%;" class="logo-light" alt="" /></a></div>
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
						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Loker</a>
							<ul class="dropdown-menu">
								<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="dashloker.php">Menu Utama</a>
								</li>
								<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="loker.php">Main Loker</a>
								</li>
							</ul>
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
						<li class="nav-item">
							<a class="nav-link" href="#!" style="padding-left: 15rem;">
								<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Navbar -->

		<figure class="cover"><img src="multimedia/image/concept/successtoredatabase.png" alt="" /></figure>

		<!-- Footer -->
		<footer class="dark-wrapper inverse-text">
			<div class="space100"></div>
			<div class="container inner pt-80 pb-50 text-center">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="row">
							<div class="col-md-4">
								<div class="widget">
									<h3 class="widget-title">Location</h3>
									<address class="mb-0"> Jl. Leuwi Panjang <br> Bandung </address>
								</div>
								<!-- /.widget -->
							</div>
							<!-- /column -->
							<div class="col-md-4">
								<div class="widget">
									<h3 class="widget-title">Follow</h3>
									<ul class="social social-mute social-s">
										<li><a href="#"><i class="jam jam-facebook"></i></a></li>
										<li><a href="https://www.instagram.com/nanas_20s/?hl=en" target="_blank"><i class="jam jam-instagram"></i></a></li>
										<li><a href="#"><i class="jam jam-twitter"></i></a></li>
									</ul>
								</div>
								<!-- /.widget -->
							</div>
							<!-- /column -->
							<div class="col-md-4">
								<div class="widget">
									<h3 class="widget-title">Contact</h3>
									<a href="mailto:ahmaadnasir16@gmail.com" class="nocolor">ahmaadnasir16@gmail.com</a> <br /> 0812 1492 6314
								</div>
								<!-- /.widget -->
							</div>
							<!-- /column -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /column -->
				</div>
				<!-- /.row -->
				<div class="space30"></div>
				<p class="text-center">© 2022 Tifa's Bootcamp. All rights reserved.</p>
			</div>
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