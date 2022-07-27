<?php
  session_start();
  $shareUsername = $_SESSION['username'];
?>

<!--  
      Created By  : Indi Bagus Prasetyo
      NIM         : 10121902
      Kelas       : IF-9K/S1/II
      Matkul      : Pemrograman Web 2
      Dosen       : Geraldi Catur Pamuji, S.Kom, M.Kom.
      Created File On v27072022:1113 (v.0.5)
-->
      
<!doctype html>
<html lang="en">
    <head>
        <!-- MetaData -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="indibagusprasetyo">
        <meta name="description" content="siloker,lowongankerja">
        <!-- Title -->
        <title>SILOKER - Loker</title>
        <!-- Links -->
        <base href="dashloker.php">
        <link rel="icon" href="multimedia/image/siloker.png" type="image/icon type">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d13b076ab0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    </head>


    <body>
<!-- Navbar (Brands) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashloker.php">SILOKER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">BERANDA</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            KURSUS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="kursus.php">MENU</a></li>
            <li><a class="dropdown-item" href="cekTempat.php">CEK TEMPAT</a></li>
            <li><a class="dropdown-item" href="pasangIklan.php">PASANG IKLAN</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LOKER
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="dashloker.php">MENU UTAMA</a></li>
            <li><a class="dropdown-item" href="loker.php">MAIN LOKER</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BOOTCAMP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="about.php">ABOUT</a></li>
            <li><a class="dropdown-item" href="digitalMarketing.php">DIGITAL MARKETING</a></li>
            <li><a class="dropdown-item" href="fullStackWebDevelopment.php">FULL STACK WEB DEVELOPMENT</a></li>
            <li><a class="dropdown-item" href="indexBootcamp.php">INDEX BOOTCAMP</a></li>
            <li><a class="dropdown-item" href="uiUx.php">UI UX</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="profil.php">PROFIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="padding-left: 15rem;">
            <p>Helo, <strong><?php echo $_SESSION['username']; ?></strong></p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-light" href="index.php">
    Masuk
  </button>

            <!-- Modal -->
            <!-- <div class="modal fade modalfix" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masuk Bersama SILOKER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <section class="vh-20" style="background-color: #170106;">
                      <div class="container py-5 h-60">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                              <div class="row g-0">
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                  <div class="card-body p-4 p-lg-5 text-black">
                                    <form>
                                      <div class="d-flex align-items-center mb-3 pb-1">
                                        <img class="w-25" src="multimedia/image/siloker.png" alt="siloker">
                                      </div>
                    
                                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk Ke Akun Anda</h5>
                    
                                      <div class="form-outline mb-4">
                                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Alamat Surel</label>
                                      </div>
                    
                                      <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Kata Sandi</label>
                                      </div>
                    
                                      <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Masuk</button>
                                      </div>
                    
                                      <a class="small text-muted" href="#!">Lupa Kata Sandi?</a>
                                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Tidak Punya Akun? <a href="#!"
                                          style="color: #393f81;">Daftar Disini!</a></p>
                                      <a href="#!" class="small text-muted">Syarat & Ketentuan .</a>
                                      <a href="#!" class="small text-muted">Kebijakan Pribadi</a>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div> -->
  </div>
</nav>



<br>
<br>
<br>

<!-- Carousel (News Siloker) -->
    <div class="container">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="multimedia/image/dashloker/carousel1.jpg" class="d-block w-100" alt="workshop">
              <div class="carousel-caption d-none d-md-block">
                <h5>Butuh pekerjaan / keahlian di Bidang Industri?</h5>
                <p>Klik <a href="#">Disini</a> untuk memulai</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="multimedia/image/dashloker/carousel2.jpg" class="d-block w-100" alt="pharmacy">
              <div class="carousel-caption d-none d-md-block">
                <h5>Mencari kursus / bootcamp mengenai farmasi?</h5>
                <p>Klik <a href="#">Disini</a> untuk memulai</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="multimedia/image/dashloker/carousel4.jpg" class="d-block w-100" alt="server-it">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ingin meningkatkan Skill Komputer kamu?</h5>
                <p>Klik <a href="#">Disini</a> untuk memulai</p>
              </div>
            </div>
          </div>
        </div>
    </div>

<!-- Search Bar -->
    <div class="col-lg-12 text-center mt-5">
      <h1>SILOKER - Cari Lowongan Pekerjaan</h1>
    </div>
    <div class="col-md-4 offset-md-4 mt-5 border border-success pt-3">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari disini..." aria-label="Recipient's username">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
          </div>
      </div>
    </div>

<!-- JumboTron (Meet's Loker) -->
    <div class="py-4">
      <div class="container">
        <div class="bg-light p-5">
          <h2>Highlight</h2>
            <p class="lead">
              Bersama SILOKER anda dapat meningkatkan kinerja dan produktivitas menjadi lebih baik, mulai dari training, bootcamp, dan lowongan pekerjaan kami sediakan untuk anda
            </p>

            <hr/>

            <p class="lead">
              Bergabung untuk mendapatkan lebih.
            </p>
            
            <a href="#" class="btn btn-primary btn-md">Pelajari Lebih Lanjut</a>
            <a href="#" class="btn btn-success btn-md">Daftar</a>
        </div>
      </div>
    </div>


<!-- Cards -->
        <div class="container p-5">
          <div class="row">
            <h2>Kategori Lowongan Untuk Anda</h2>
          </div>
    
          <div class="row">
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="multimedia/image/dashloker/carousel3.jpg" class="card-img-top" alt="agriculture">
                <div class="card-body">
                  <h5 class="card-title">Agrobisnis</h5>
                  <p class="card-text">Teknik Agrobisnis, meliputi dunia Pertanian yang siap anda jelajahi. Agrobisnis adalah usaha yang cocok untuk anda yang senang dengan pertanian.</p>
                  <a href="loker.php" class="btn btn-primary">Jelajahi</a>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="multimedia/image/dashloker/industriemp.jpg" class="card-img-top" alt="industry-employee">
                <div class="card-body">
                  <h5 class="card-title">Teknik</h5>
                  <p class="card-text">Mungkin cocok untuk kamu yang mempunyai keahlian Teknik tertentu.</p>
                  <a href="loker.php" class="btn btn-primary">Jelajahi</a>
                </div>
              </div> 
            </div>
    
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="multimedia/image/dashloker/bankemp.jpg" class="card-img-top" alt="banks">
                <div class="card-body">
                  <h5 class="card-title">Keuangan</h5>
                  <p class="card-text">Dunia Keuangan meliputi badan usaha keuangan ,akuntansi ,perkantoran, dan masih banyak lagi.</p>
                  <a href="loker.php" class="btn btn-primary">Jelajahi</a>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="multimedia/image/dashloker/konstruksiemp.jpg" class="card-img-top" alt="construction-employee">
                <div class="card-body">
                  <h5 class="card-title">Konstruksi</h5>
                  <p class="card-text">Konstruksi adalah sebuah bidang usaha mengenai susunan dan pembangunan suatu benda / bangunan yang akan menjadi mobilitas masyarakat maupun instansi.</p>
                  <a href="loker.php" class="btn btn-primary">Jelajahi</a>
                </div>
              </div>
            </div>
    
          </div>
        </div>

<!-- Accordion (FAQ) -->
    <div class="container p-5">
      <div class="row">
        <h2>FREQUENTLY ASKED QUESTIONS (FAQ's)</h2>
      </div>

      <div class="row">
        <div class="col">
          <p class="lead">Pertanyaan yang sering ditanyakan</p>
        </div>

        <div class="col">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Mengapa Mencari Loker Disini?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Dengan SILOKER anda akan dimudahkan dalam mencari pekerjaan swasta/negeri, pekembangan informasi yang didapat tentu terpercaya dan sangat cepat.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Apa yang disediakan SILOKER?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Kami menyediakan beberapa layanan hanya melalui website di <a href="#">siloker.com</a>. Dengan layanan ini Anda dapat dimudahkan mencari lowongan pekerjaan, mencari pelatihan khusus/bootcamp, dimudahkan untuk mencari informasi terkait pekerjaan yang anda inginkan.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Apakah SILOKER Berbayar?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Dengan fasilitas premium yang kami berikan, semuanya adalah <strong>GRATIS !</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
                

<!-- Footer -->
        <div class="container">
          <iframe src="footer.html" width="1280" height="480"></iframe>
        </div>

  </body>
</html>