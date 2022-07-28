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
        <base href="superadminloker.php">
        <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d13b076ab0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    </head>

    <body>
<!-- NavBar of Head -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="container-fluid">
                <a class="navbar-brand" href="dashloker.php">SILOKER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Collapse -->
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
                        <p>Helo, <strong></strong></p>
                      </a>
                    </li>
                    </ul>
                </div>
            </div>

            <a href="index.php" class="btn btn-light">Masuk</a>

            </div>
        </nav>

        <br>

 <!-- Heading -->
        <div class="container">
            <h2>Selamat datang Admin !!!</h2>
        </div>

        <br>
        <div class="container">
          <div class="alert alert-danger" role="alert">
            Peringatan! Mengubah Berarti Menghapus! Pastikan jika ingin merubah untuk mengecek kembali data!
        </div>
        </div>

        <div class="container">
            <iframe src="controladmin.html" width="1280" height="480"></iframe>
        </div>

        <br>
        <br>
        
        <div class="container">
            <h2>Solusi Skill dan Jenjangi Dirimu!</h2>
        </div>


        <!-- Footer -->
        <div class="container">
            <iframe src="footer.html" width="1280" height="480"></iframe>
          </div>
    </body>
</html>