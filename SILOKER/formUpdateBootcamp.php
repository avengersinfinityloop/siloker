<?php
require "callInputBootcamp.php";

//PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
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
  <link rel="shortcut icon" href="">
  <title>Form Update</title>
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

  <!-- Modal Form -->
  <div class="container inner">
    <div class="image-block-wrapper">
      <div class="image-block col-lg-6">
        <div class="image-block-bg bg-image" data-image-src="multimedia/image/concept/formimage-updatedatabasev2.png"></div>
      </div>
      <!--/.image-block -->
      <div>
        <div class="row no-gutters">
          <div class="col-lg-6 offset-lg-6">
            <div class="box p-50 d-flex">
              <div class="align-self-left">
                <h4 class="section-title mb-30">Form Update</h4>
                <form id="form_daftar" method="post" action="updatedb-pesertabootcamp.php">
                  <div class="messages"></div>
                  <div class="controls">
                    <!-- NIK -->
                    <div class="form-row">
                      <div class="col-12">
                        <div class="form-group">
                          <input id="form_nik" type="text" name="nik" class="form-control" placeholder="NIK*" value="<?php echo $nik ?>" required="required" data-error="NIK is required." readonly>
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
                        <div class="form-group custom-select-wrapper">
                          <select id="form_kota" class="custom-select" type="text" name="kota" placeholder="Kota Tinggal *" value="<?php echo $lokasi ?>" required="required" data-error="Kota Tinggal is required.">
                            <option selected>Kota</option>
                            <option>Ambon</option>
                            <option>Balikpapan</option>
                            <option>Banda Aceh</option>
                            <option>Bandar Lampung</option>
                            <option>Bandung</option>
                            <option>Banjar</option>
                            <option>Banjar Baru</option>
                            <option>Banjarmasin</option>
                            <option>Batam</option>
                            <option>Batu</option>
                            <option>Baubau</option>
                            <option>Bekasi</option>
                            <option>Bengkulu</option>
                            <option>Bima</option>
                            <option>Binjai</option>
                            <option>Bitung</option>
                            <option>Blitar</option>
                            <option>Bogor</option>
                            <option>Bontang</option>
                            <option>Bukittinggi</option>
                            <option>Cilegon</option>
                            <option>Cimahi</option>
                            <option>Cirebon</option>
                            <option>Denpasar</option>
                            <option>Depok</option>
                            <option>Dumai</option>
                            <option>Gorontalo</option>
                            <option>Gunungsitoli</option>
                            <option>Jakarta</option>
                            <option>Jambi</option>
                            <option>Jayapura</option>
                            <option>Kediri</option>
                            <option>Kendari</option>
                            <option>Kotamobagu</option>
                            <option>Kupang</option>
                            <option>Langsa</option>
                            <option>Lhokseumawe</option>
                            <option>Lubuklinggau</option>
                            <option>Madiun</option>
                            <option>Magelang</option>
                            <option>Makassar</option>
                            <option>Malang</option>
                            <option>Manado</option>
                            <option>Mataram</option>
                            <option>Medan</option>
                            <option>Metro</option>
                            <option>Mojokerto</option>
                            <option>Padang</option>
                            <option>Padang Panjang</option>
                            <option>Padang Sidempuan</option>
                            <option>Pagar Alam</option>
                            <option>Palangka Raya</option>
                            <option>Palembang</option>
                            <option>Palopo</option>
                            <option>Palu</option>
                            <option>Pangkalpinang</option>
                            <option>Parepare</option>
                            <option>Pariaman</option>
                            <option>Pasuruan</option>
                            <option>Payakumbuh</option>
                            <option>Pekalongan</option>
                            <option>Pekanbaru</option>
                            <option>Pematangsiantar</option>
                            <option>Pontianak</option>
                            <option>Prabumulih</option>
                            <option>Probolinggo</option>
                            <option>Sabang</option>
                            <option>Salatiga</option>
                            <option>Samarinda</option>
                            <option>Sawahlunto</option>
                            <option>Semarang</option>
                            <option>Serang</option>
                            <option>Sibolga</option>
                            <option>Singkawang</option>
                            <option>Solok</option>
                            <option>Sorong</option>
                            <option>Subulussalam</option>
                            <option>Sukabumi</option>
                            <option>Sungai Penuh</option>
                            <option>Surabaya</option>
                            <option>Surakarta</option>
                            <option>Tangerang Selatan</option>
                            <option>Tangerang</option>
                            <option>Tanjungbalai</option>
                            <option>Tanjungpinang</option>
                            <option>Tarakan</option>
                            <option>Tasikmalaya</option>
                            <option>Tebing Tinggi</option>
                            <option>Tegal</option>
                            <option>Ternate</option>
                            <option>Tidore Kepulauan</option>
                            <option>Tomohon</option>
                            <option>Tual</option>
                            <option>Yogyakarta</option>
                          </select>
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
                        <div class="form-group custom-select-wrapper">
                          <select id="form_namaBootcamp" class="custom-select" type="text" name="namaBootcamp" placeholder="Pilih Bootcamp *" required="required" data-error="Pilih Bootcamp is required.">
                            <option selected>Pilih Bootcamp</option>
                            <option>Digital Marketing</option>
                            <option>Full Stack Web Development</option>
                            <option>UI/UX Designer</option>
                          </select>
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
  </div>
  <!-- Modal Form -->

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
  <!-- Start Script -->
</body>

</html>