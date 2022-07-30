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
	<link rel="shortcut icon" href="multimedia/image/logo//silokerlogo.png">
	<title>Tifa's Bootcamp</title>
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

		<!-- Banner -->
		<div class="space15"></div>
		<div class="wrapper light-wrapper">
			<div class="rev_slider_wrapper fullwidth-container">
				<div id="slider14" class="rev_slider fullwidthbanner" data-version="5.4.7">
					<ul>
						<!-- Banner 1 -->
						<li data-transition="fade" data-delay="99999999" data-thumb=""><img src="multimedia/image/concept/banner-selamatdatangv2.png" srcset="multimedia/image/concept/banner-selamatdatangv2.png" alt="" />
							<!-- Title -->
							<div class="tp-caption font-weight-600 color-white" data-x="left" data-y="middle" data-hoffset="250" data-voffset="-90" data-fontsize="50" data-lineheight="62" data-width="['550','550','550','340']" data-whitespace="['normal','normal','normal','normal']" data-frames='[{"delay":500,"speed":1200,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;">Tifa's Bootcamp
							</div>
							<!-- Caption -->
							<div class="tp-caption font-weight-400 color-white" data-x="left" data-y="middle" data-hoffset="250" data-voffset="0" data-fontsize="30" data-lineheight="40" data-width="550" data-whitespace="normal" data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;">Bootcamp Nomor 1 yang Fokus di Bidang Industri IT dan Kreatif
							</div>
							<!-- Learn More -->
							<a class="tp-caption btn btn-l btn-white btn-strong-hover scroll" data-x="left" data-y="middle" data-hoffset="['250','250','250','175']" data-voffset="['140','140','140','175']" data-width="['auto','auto','auto','auto']" data-frames='[{"delay":2000,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;" href="#pilihanBootcamp">Learn More
							</a>
						</li>
						<!-- Banner 2 -->
						<li class="light-gallery-wrapper" data-transition="fade" data-delay="99999999" data-thumb=""><img src="multimedia/image/concept/3pilihanbootcamp.png" alt="" />
						</li>
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!-- Banner -->

		<!-- Pilihan Bootcamp -->
		<div id="pilihanBootcamp" class="container inner">
			<div class="text-center">
				<h2 class="title-bg bg-violet color-white">Pilihan Bootcamp</h2>
			</div>
			<div class="space10"></div>
			<h3 class="display-3 text-center">Pilih kelas sesuai topik yang kamu minati. Gali potensi yang selama ini kamu yakini bersama mentor yang ahli di bidangnya, bakal dipandu sampai paham.</h3>
			<div class="space30"></div>
			<div class="row gutter-60 text-center align-items-end">

				<div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
					<figure class="mb-30"><img src="#" srcset="multimedia/image/concept/digital-marketing.png" alt="" /></figure>
					<h4>Digital Marketing</h4>
					<p class="mb-15">Belajar Facebook Ads dan Tiktok Ads di Digital Marketing selama 4 bulan dari awam sampai paham!</p>
					<div class="text-center"><a href="digitalMarketing.php" class="more">Learn more</a></div>
				</div>

				<div class="space20 d-md-none"></div>
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
					<figure class="mb-30"><img src="multimedia/image/concept/ui-ux.png" srcset="multimedia/image/concept/ui-ux.png" alt="" /></figure>
					<h4>UI/UX Designer</h4>
					<p class="mb-15">Belajar dari awam sampai mahir bikin produk lebih menarik pakai tools professional selama 4 bulan</p>
					<div class="text-center"><a href="uiUx.php" class="more">Learn more</a></div>
				</div>

				<div class="space20 d-md-none"></div>
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
					<figure class="mb-30"><img src="multimedia/image/concept/fullstackwebdevelopment.png" srcset="multimedia/image/concept/fullstackwebdevelopment.png" alt="" /></figure>
					<h4>Full Stack Web Development</h4>
					<p class="mb-15">Belajar Front-End programming (HTML & CSS). Jago ReactJs, NodeJs, dan Bootstrap selama 4 bulan dari awam sampai paham!</p>
					<div class="text-center"><a href="fullStackWebDevelopment.php" class="more">Learn more</a></div>
				</div>
			</div>
		</div>
		<!-- Pilihan Bootcamp -->

		<!-- Why Choose Us -->
		<div class="container inner pt-10">
			<!-- <div class="space50"></div> -->
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-2 text-center">
					<figure><img src="#" srcset="multimedia/image/concept/whyus.png" alt="" /></figure>
				</div>
				<div class="space20 d-md-none"></div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="col-lg-6 pr-60 pr-md-15">
					<h2 class="title-bg bg-violet color-white">Why Choose Us?</h2>
					<div class="space10"></div>
					<h3 class="display-3">Mengapa Belajar di Tifa's Bootcamp?</h3>
					<div class="space20"></div>
					<div id="accordion-1" class="accordion-wrapper simple">
						<div class="card">
							<div class="card-header" id="accordion-heading-1-1">
								<h5>
									<button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Lembaga Pendidikan Digital Terpercaya Sejak 1998</button>
								</h5>
							</div>
							<div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-parent="#accordion-1">
								<div class="card-body">
									<p>Didirikan oleh Tifa Lockhart yang merupakan lulusan Software Engineer terbaik dari Midgard, Tifa's Bootcamp telah memiliki pengalaman 23+ tahun sebagai bukti komitmen kami untuk menjadi yang pilihan terbaik di bidang pendidikan teknologi digital.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="accordion-heading-1-2">
								<h5>
									<button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Belajar Secara Langsung dari Pakar di Industri</button>
								</h5>
							</div>
							<div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-parent="#accordion-1">
								<div class="card-body">
									<p>Dapatkan pengalaman belajar langsung dari para instruktur dan mentor Tifa's Bootcamp yang telah berpengalaman bekerja di berbagai perusahaan multinasional terkemuka.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="accordion-heading-1-3">
								<h5>
									<button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Dukungan Karir Pribadi Seumur Hidup</button>
								</h5>
							</div>
							<div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-parent="#accordion-1">
								<div class="card-body">
									<p>Tifa's Bootcamp akan memberikan dukungan karir pribadi dan fasilitas koneksi kerja seumur hidup kepada setiap alumni Program Job Connector.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Why Choose Us -->

		<!-- Metode Belajar -->
		<div class="container inner pt-10">
			<div class="text-center">
				<h2 class="title-bg bg-violet color-white">Metode Belajar</h2>
			</div>
			<div class="space10"></div>
			<h3 class="display-3 text-center">Pilih Metode Belajar yang Paling Sesuai Dengan Kebutuhanmu</h3>
			<div class="space30"></div>
			<ul class="nav nav-tabs nav-tabs-centered nav-tabs-bg d-flex justify-content-between nav-justified text-center">
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4-1">
						<div class="icon icon-svg mb-10"><img src="multimedia/image/concept/oncampus.png" alt=""></div><span>On Campus</span>
					</a>
				</li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4-2">
						<div class="icon icon-svg mb-10"><img src="multimedia/image/concept/online.png" alt=""></div><span>Online</span>
					</a>
				</li>
			</ul>
			<!-- /.nav-tabs -->
			<div class="space30 d-none d-md-block"></div>
			<div class="tab-content">
				<div class="tab-pane" id="tab4-1">
					<div class="box bg-white shadow">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="pr-15 pr-md-0 pr-sm-0 h-100">
									<figure><img src="#" srcset="multimedia/image/concept/oncampus.png" alt="" /></figure>
								</div>
							</div>
							<!--/column -->
							<div class="space30 d-none d-md-block d-lg-none"></div>
							<div class="col-lg-6">
								<div class="pl-15 pl-md-0 pl-sm-0 h-100">
									<div class="space15"></div>
									<h2 style="color: #b380cf;">On Campus</h2>
									<p><strong>Belajar dengan metode offline di berbagai pilihan lokasi kampus Tifa yang terletak di Jakarta dan Bandung.</strong></p>
									<i class="fa fa-user" aria-hidden="true"></i>
									<p style="display: inline-block">Belajar secara tatap muka di kampus di Tifa University di Jakarta dan Bandung</p>
									<br>
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<p style="display: inline-block">Sesi kelas diadakan setiap Senin s.d. Jumat jam 9.00 - 12.00 WIB sebanyak 58x pertemuan <br> (174 jam).</p>
									<br>
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<p style="display: inline-block">Sesi practice diadakan setiap Senin s.d. Jumat jam 13.00 - 16.00 WIB sebanyak 58x pertemuan (174 jam).</p>
									<br>
									<i class="fa fa-wifi" aria-hidden="true"></i>
									<br>
									<p style="display: inline-block">Fasilitas livestream bagi peserta yang berhalangan hadir di kelas.</p>
									<br>
									<i class="fa fa-play-circle" aria-hidden="true"></i>
									<p style="display: inline-block">Tersedia rekaman kelas yang dapat ditonton ulang via learning management system.</p>
								</div>
							</div>
							<!--/column -->
						</div>
						<!--/.row -->
					</div>
					<!--/.box -->
				</div>
				<div class="tab-pane" id="tab4-2">
					<div class="box bg-white shadow">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="pr-15 pr-md-0 pr-sm-0 h-100">
									<figure><img src="#" srcset="multimedia/image/concept/online.png" alt="" /></figure>
								</div>
							</div>
							<!--/column -->
							<div class="space30 d-none d-md-block d-lg-none"></div>
							<div class="col-lg-6">
								<div class="pl-15 pl-md-0 pl-sm-0 h-100">
									<div class="space15"></div>
									<h2 style="color: #b380cf;">Online</h2>
									<p><strong>Perpaduan belajar online dengan metode video dan livestream sehingga peserta program dipastikan akan tetap dibimbing secara langsung oleh pengajar kami.</strong></p>
									<i class="fa fa-wifi" aria-hidden="true"></i>
									<p style="display: inline-block">Belajar secara video dan juga livestreaming via Zoom</p>
									<br>
									<i class="fa fa-play-circle" aria-hidden="true"></i>
									<p style="display: inline-block">Sesi kelas menggunakan video learning yang telah disediakan</p>
									<br>
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<p style="display: inline-block">Sesi practice diadakan setiap Senin s.d. Jumat jam 13.00 - 16.00 WIB sebanyak 58x pertemuan (174 jam).</p>
									<br>
									<i class="fa fa-video-camera" aria-hidden="true"></i>
									<p style="display: inline-block">Tersedia rekaman practice session yang dapat ditonton ulang via learning management system.</p>
								</div>
							</div>
							<!--/column -->
						</div>
						<!--/.row -->
					</div>
					<!--/.box -->
				</div>

			</div>
			<!-- /.tab-content -->
		</div>
		<!-- Metode Belajar -->

		<!-- Rincian Biaya dan Benefit -->
		<div class="container inner pt-10">
			<div class="text-center">
				<h2 class="title-bg bg-violet color-white">Rincian Biaya dan Benefit</h2>
			</div>
			<div class="space10"></div>
			<h3 class="display-3 text-center">Berikut rincian biaya program ini serta pilihan metode pembayaran yang dapat kamu pilih dan benefit yang akan kamu dapatkan</h3>
			<div class="space15"></div>
			<div class="row justify-content-around text-center">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">On Campus</h5>
								<h1 class="card-title">Rp.8.999.000</h1>
								<div class="text-left">
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Belajar intensif selama 58x pertemuan</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Senin s.d. Jumat jam 13.00 - 16.00 WIB</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Tren Kurikulum</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Portfolio & Sertifikat</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Penempatan Kerja</p>
								</div>
								<br>
								<a href="#" class="btn btn-violet btn-primary">Learn More</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Online</h5>
								<h1 class="card-title">Rp.6.999.000</h1>
								<div class="text-left">
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Belajar intensif selama 58x pertemuan</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Senin s.d. Jumat jam 13.00 - 16.00 WIB</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Tren Kurikulum</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Portfolio & Sertifikat</p>
									<br>
									<i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="card-text" style="display: inline-block">Penempatan Kerja</p>
								</div>
								<br>
								<a href="#" class="btn btn-violet btn-primary">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Rincian Biaya dan Benefit -->

		<!-- dummy Partner -->
		<div class="container inner pt-10">
			<div class="text-center">
				<h2 class="title-bg bg-violet color-white">Dummy Partner</h2>
			</div>
			<div class="space15"></div>
			<div class="carousel owl-carousel clients" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-responsive='{"0":{"items": "2"}, "768":{"items": "4"}, "992":{"items": "5"}, "1140":{"items": "6"}}'>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/botwlogo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/ff7remakelogo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/rdr2logo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/eldenringlogo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/revillagelogo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/ds3logo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/gowlogo.png" alt="" /></div>
				<div class="item pl-15 pr-15"><img src="multimedia/image/logo/revillagelogo.png" alt="" /></div>
			</div>
		</div>
		<!-- dummy Partner -->

		<!-- Free Trial -->
		<div class="container inner pt-10">
			<figure class="cover"><img src="multimedia/image/concept/masihbingung.png" alt="" /></figure>
			<div class="space25"></div>
			<div class="text-center"><a href="#" class="btn" data-toggle="modal" data-target="#modal-06">Free Trial</a></div>
			<div class="modal fade" id="modal-06" tabindex="-1" role="dialog" aria-labelledby="modal-06" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
					<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<div class="box bg-white p-40 text-center">
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<figure class="mb-30"><img src="#" srcset="style/images/concept/concept19.png 1x, style/images/concept/concept19@2x.png 2x" alt="" /></figure>
								</div>
								<!-- /column -->
							</div>
							<!-- /.row -->
							<h3>Daftarkan email kamu untuk mendapat FREE TRIAL 3 HARI GRATISSS!!!</h3>
							<div class="newsletter-wrapper">
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<form action="insertdb-freetrial.php" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
											<div id="mc_embed_signup_scroll2" class="input-group">
												<input type="email" value="" name="email" class="email form-control mb-0 mr-2 mb-sm-0" id="mce-EMAIL2" placeholder="Email Address" required>
												<button type="submit" name="email" id="mc-embedded-subscribe2" class="btn btn-rounded btn-default mr-0 mb-0 pull-right">Join</button>
												<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
												<div style="position: absolute; left: -5000px;" aria-hidden="true">
													<input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" tabindex="-1" value="">
												</div>
												<div class="clearfix"></div>
											</div>
										</form>
									</div>
									<!-- /.newsletter-wrapper -->
								</div>
								<!-- /column -->
							</div>
							<!-- /.row -->
						</div>
						<!--/.box -->
					</div>
					<!--/.modal-content -->
				</div>
				<!--/.modal-dialog -->
			</div>
		</div>
		<!-- Free Trial -->

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