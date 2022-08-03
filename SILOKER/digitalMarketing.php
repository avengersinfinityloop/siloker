<?php

require "callInputBootcamp.php";

//tampilan USER yang sedang LOGIN
session_start();
$shareUsername = $_SESSION['username'];
$nik = cekNik($shareUsername);
if ($nik == 0) {
  $infoNik = ' - BIO TIDAK LENGKAP!';
}
$nama = cekNamaLengkap($shareUsername);
$email = cekEmail($shareUsername);
$hp = cekHP($shareUsername);
$kota = cekKota($shareUsername);
$alamat = cekAlamat($shareUsername);
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
  <title>Bootcamp Digital Marketing</title>
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
            <li data-transition="fade" data-delay="99999999" data-thumb=""><img src="multimedia/image/concept/bannerdigitalmarketing1.png" alt="" />
              <div class="tp-caption font-weight-600 color-purple" data-x="left" data-y="middle" data-hoffset="['250','250','250','175']" data-voffset="['-90','-90','-90','-100']" data-fontsize="['50','50','50','46']" data-lineheight="['62','62','62','58']" data-width="['550','550','550','340']" data-whitespace="['normal','normal','normal','normal']" data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;">Digital Marketing
              </div>
              <!-- /.tp-caption -->
              <div class="tp-caption font-weight-400 color-purple" data-x="left" data-y="middle" data-hoffset="['250','250','250','175']" data-voffset="['30','30','30','60']" data-fontsize="['30','30','30','28']" data-lineheight="['40','40','40','38']" data-width="['550','550','550','340']" data-whitespace="['normal','normal','normal','normal']" data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;">Yuk, mulai petualanganmu menjadi Digital Marketer idaman banyak perusahaan.
              </div>
              <!-- /.tp-caption -->
              <a class="tp-caption btn btn-l btn-purple btn-strong-hover scroll" data-x="left" data-y="middle" data-hoffset="['250','250','250','175']" data-voffset="['140','140','140','175']" data-width="['auto','auto','auto','auto']" data-frames='[{"delay":2000,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;" href="#tentangProgram">Learn More
              </a>
              <!-- /.tp-caption -->
            </li>
            <li class="light-gallery-wrapper" data-transition="fade" data-delay="99999999" data-thumb=""><img src="multimedia/image/concept/banner-limitedslot.png" alt="" />
              <a class="tp-caption btn btn-l btn-purple btn-strong-hover scroll" data-x="left" data-y="middle" data-hoffset="['100','100','100','50']" data-voffset="['140','140','140','175']" data-width="['auto','auto','auto','auto']" data-frames='[{"delay":500,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-responsive="on" data-responsive_offset="on" style="z-index: 9;" href="#formDaftar">Daftar Sekarang
              </a>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.rev_slider -->
      </div>
      <!-- /.rev_slider_wrapper -->
    </div>
    <!-- Banner -->

    <!-- Tentang Program -->
    <div id="tentangProgram" class="container inner">
      <div class="text-center">
        <h2 class="title-bg bg-default color-white">Tentang Program</h2>
      </div>
      <h3 class="display-3 text-center">Seorang Digital Marketer dapat menjadi penggerak bisnis dalam menentukan audience dan membangun brand, hingga memaksimalkan penjualan.</h3>
      <div class="space40"></div>
      <div class="row text-center gutter-60">
        <div class="col-md-6 col-lg-3">
          <div class="icon icon-blob icon-blob-rose color-rose mb-20"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </div>
          <h5>Kurikulum Pendidikan Digital Marketing Terdepan dan Terlengkap</h5>
          <p>Program training intensif untuk siapa saja yang ingin shifting ke dunia Digital Marketing tanpa background sekalipun hanya dalam 12 minggu.</p>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="icon icon-blob icon-blob-blue color-blue mb-20"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
          <h5>Dimentor Langsung Oleh Praktisi Digital Marketer Terkemuka</h5>
          <p>Dapatkan pengalaman belajar langsung dari para instruktur dan mentor di bidang Digital Marketing yang telah berpengalaman bekerja di berbagai perusahaan multinasional terkemuka.</p>
        </div>

        <div class="space30 d-none d-md-block d-lg-none"></div>
        <div class="col-md-6 col-lg-3">
          <div class="icon icon-blob icon-blob-green color-green mb-20"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> </div>
          <h5>Dukungan Karir Ekslusif Seumur Hidup Sebagai Digital Marketer</h5>
          <p>Tifa's Bootcamp akan memberikan dukungan karir pribadi dan fasilitas koneksi kerja seumur hidup kepada setiap alumni Program Job Connector.</p>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="icon icon-blob icon-blob-purple color-purple mb-20"> <i class="fa fa-book" aria-hidden="true"></i> </div>
          <h5>Koneksi Kerja ke 500+ Hiring Partner di Seluruh Asia</h5>
          <p>Program yang memberikan koneksi pekerjaan untuk meraih karir digital di perusahaan terpercaya baik di Indonesia hingga luar negeri.</p>
        </div>
      </div>
    </div>
    <!-- Tentang Program -->

    <!-- Kurikulum -->
    <div class="container inner pt-10">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2 text-center">
          <figure><img src="/style/images/concept/" srcset="multimedia/image/concept/whyus.png" alt="" /></figure>
        </div>
        <div class="space20 d-md-none"></div>
        <div class="space50 d-none d-md-block d-lg-none"></div>
        <div class="col-lg-6 pr-60 pr-md-15">
          <h2 class="title-bg bg-default color-white">Kurikulum</h2>
          <div class="space10"></div>
          <h3 class="display-3">Apa Saja yang Akan Kamu Pelajari?</h3>
          <div class="space20"></div>
          <div id="accordion-1" class="accordion-wrapper simple">
            <div class="card">
              <div class="card-header" id="accordion-heading-1-1">
                <h5>
                  <button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Digital Marketing Foundation</button>
                </h5>
              </div>
              <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-parent="#accordion-1">
                <div class="card-body">
                  <p>Pelajari dasar-dasar dari digital marketing serta berbagai perilaku konsumen di era digital, mulai dari memahami target audiens, konsep digital branding, hingga membuat strategi digital marketing yang efektif.</p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="accordion-heading-1-2">
                <h5>
                  <button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Search Engine Optimization (SEO)</button>
                </h5>
              </div>
              <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-parent="#accordion-1">
                <div class="card-body">
                  <p>Pahami konsep dasar SEO mulai dari penerapan SEO Friendly, membuat sitemap, melakukan keyword research, hingga memproduksi konten website yang sesuai dengan algoritma Google terbaru.</p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="accordion-heading-1-3">
                <h5>
                  <button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Social Media Marketing (SMM)</button>
                </h5>
              </div>
              <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-parent="#accordion-1">
                <div class="card-body">
                  <p>Mempelajari konsep dasar berbagai platform social media yang sesuai kebutuhan brand, mengenal framework social media marketing, hingga membuat social media content calendar dan dashboard.</p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="accordion-heading-1-4">
                <h5>
                  <button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Paid Media & Digital Ads</button>
                </h5>
              </div>
              <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-parent="#accordion-1">
                <div class="card-body">
                  <p>Mengenal cara kerja paid media mulai dari struktur, konsep dasar google ads, Facebook ads, Instagram Ads, dan lainnya, hingga mengukur performa paid media.</p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="accordion-heading-1-5">
                <h5>
                  <button class="collapsed" data-toggle="collapse" data-target="#accordion-collapse-1-5" aria-expanded="false" aria-controls="accordion-collapse-1-5">Data Collection, Analytics, and Reporting</button>
                </h5>
              </div>
              <div id="accordion-collapse-1-5" class="collapse" aria-labelledby="accordion-heading-1-5" data-parent="#accordion-1">
                <div class="card-body">
                  <p>Memahami konsep dasar Google dan Social Media Analytics mulai dari mengenal proses data collection, fitur-fitur Google Analytics, hingga memasang tracker analytics.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Kurikulum -->

    <!-- Platform yang Dipelajari -->
    <div class="container inner pt-10">
      <div class="text-center">
        <h2 class="title-bg bg-default color-white">Platform yang akan Dipelajari</h2>
      </div>
      <div class="space25"></div>
      <div class="row clients text-center">
        <div class="col-md-4 col-lg-3">
          <figure class="pl-15 pr-15"><img src="multimedia/image/logo/googleadslogo.png" alt="" /></figure>
        </div>

        <div class="col-md-4 col-lg-2">
          <figure class="pl-15 pr-15"><img src="multimedia/image/logo/googlealanylicslogo.png" alt="" /></figure>
        </div>

        <div class="col-md-4 col-lg-2">
          <figure class="pl-15 pr-15"><img src="multimedia/image/logo/instagramlogo.png" alt="" /></figure>
        </div>

        <div class="col-md-4 col-lg-2">
          <figure class="pl-15 pr-15"><img src="multimedia/image/logo/facebooklogo.png" alt="" /></figure>
        </div>

        <div class="col-md-4 col-lg-2">
          <figure class="pl-15 pr-15"><img src="multimedia/image/logo/tiktoklogo.png" alt="" /></figure>
        </div>
      </div>
    </div>
    <!-- Platform yang Dipelajari -->

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

    <!-- Modal Form -->
    <div id="formDaftar" class="wrapper gray-wrapper">
      <div class="container inner">
        <h2 class="section-title mb-40 text-center">Form Pendaftaran</h2>
        <div class="text-center"><a href="#" class="btn" data-toggle="modal" data-target="#modal-03">Daftar Sekarang</a></div>
        <div class="modal fade" id="modal-03" tabindex="-1" role="dialog" aria-labelledby="modal-03" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="container-fluid boxed p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="image-block-wrapper">
                  <div class="image-block col-lg-6">
                    <div class="image-block-bg bg-image" data-image-src="multimedia/image/concept/formimage-digitalmarketing.png"></div>
                  </div>
                  <!--/.image-block -->
                  <div>
                    <div class="row no-gutters">
                      <div class="col-lg-6 offset-lg-6">
                        <div class="box p-50 d-flex">
                          <div class="align-self-left">
                            <h4 class="section-title mb-30">Daftar Bootcamp Digital Marketing</h4>
                            <form id="form_daftar" method="post" action="insertdb-pesertabootcamp.php">
                              <div class="messages"></div>
                              <div class="controls">
                                <!-- NIK -->
                                <div class="form-row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <input id="form_nik" type="number" name="nik" class="form-control" placeholder="NIK*" value="<?php echo $nik ?>" required="required" data-error="NIK is required.">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Nama Lengkap -->
                                <div class="form-row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <input id="form_namaLengkap" type="text" name="namaLengkap" class="form-control" placeholder="Nama Lengkap *" value="<?php echo $nama ?>" required="required" data-error="Full Name is required.">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Email -->
                                <div class="form-row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" value="<?php echo $email ?>" required="required" data-error="Email is required.">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- No. Handphone -->
                                <div class="form-row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <input id="form_noHP" type="number" name="noHP" class="form-control" placeholder="No.Handphone *" value="<?php echo $hp ?>" required="required" data-error="Nomor Handphone is required.">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Kota Tinggal -->
                                <div class="form-row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <input id="form_kota" type="text" name="kota" class="form-control" placeholder="Kota Tinggal *" value="<?php echo $kota ?>" required="required" data-error="Kota Tinggal is required.">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Alamat -->
                                <div class="form-row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <input id="form_alamat" type="text" name="alamat" class="form-control" placeholder="Alamat *" value="<?php echo $alamat ?>" required="required" data-error="Alamat is required.">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Pekerjaan -->
                                <div class="form-row">
                                  <div class="col-md-12">
                                    <div class="form-group custom-select-wrapper">
                                      <select id="form_pekerjaan" class="custom-select" type="text" name="pekerjaan" placeholder="Pekerjaan *" required="required" data-error="Pekerjaan is required.">
                                        <option selected>Pilih Pekerjaan</option>
                                        <option>Siswa/Mahasiswa</option>
                                        <option>Karyawan Perusahaan</option>
                                        <option>Freelance</option>
                                        <option>Pengusaha</option>
                                        <option>Youtuber</option>
                                        <option>Tiktokers</option>
                                        <option>Fulltime Interview</option>
                                        <option>Fulltime Nganggur</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- Pilih Bootcamp -->
                                <div class="form-row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <input id="form_namaBootcamp" class="custom-select" type="text" name="namaBootcamp" value="Digital Marketing" readonly>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group custom-select-wrapper">
                                      <select id="form_metode" class="custom-select" type="text" name="metode" placeholder="Pilih Metode *" required="required" data-error="Metode Belajar is required.">
                                        <option selected>Pilih Metode</option>
                                        <option>On Campus</option>
                                        <option>Online</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="col-md-12">
                                    <input type="submit" class="btn btn-send" value="Submit">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <!-- /form -->
                          </div>
                          <!-- /div -->
                        </div>
                        <!-- /.box -->
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!--/div -->
                </div>
                <!--/.image-block-wrapper -->
              </div>
              <!--/.boxed -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-dialog -->
        </div>
        <!--/.modal -->
      </div>
      <!-- /.container -->
    </div>
    <!-- Modal Form -->

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