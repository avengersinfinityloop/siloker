<?php
  session_start();
  if ($_SESSION and $_SESSION['username']) $shareUsername = $_SESSION['username']
?>

<!doctype html>
<html lang="en">

<!--  
      Created By  : Indi Bagus Prasetyo
      NIM         : 10121902
      Kelas       : IF-9K/S1/II
      Matkul      : Pemrograman Web 2
      Dosen       : Geraldi Catur Pamuji, S.Kom, M.Kom.
      Created File On v27072022:1113 (v.1.1)
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
        <base href="loker.php">
        <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
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
        <a class="navbar-brand" href="dashloker.php">
            <img src="multimedia/image/logo/silokerlogo.png" alt="no gambar" width="30" height="30">SILOKER
        </a>
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
								<p>Helo, <strong><?php echo $shareUsername;?></strong></p>
							</a>
						</li>
        </ul>
      </div>
    </div>

  <!-- Button trigger modal -->
  <?php if( $shareUsername == "superadm") {
    ?> <a href="superadminloker.php" class="btn btn-light btn-sm " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Masuk Admin</a> &nbsp;&nbsp;&nbsp;
  <?php 
  } ?>
  <?php if( $shareUsername) {
      ?> <a href="index.php" class="btn btn-light">Keluar</a>
    <?php 
    } else {
      ?><a href="index.php" class="btn btn-light">Masuk</a> <?php } ?>

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

<!-- Main Filter -->
<div class="container">
    <div class="row">
        <h2>LOWONGAN PEKERJAAN</h2>
    </div>
    <div class="row">
    <form action="loker.php" method="POST">

        <div class="col">
            <p>Bidang</p>
            <select name="bidang_kerja" class="form-select" aria-label="Default select example">
              <option value="" selected>Pilih Bidang Kerja</option>
                <option value="ARSITEKTUR" >Arsitektur</option>
                <option value="TENAGA AHLI">Tenaga Ahli</option>
            </select>
        </div>

        <div class="col">
            <p>Lulusan</p>
            <select name="lulusan_min" class="form-select" aria-label="Default select example">
                <option value="" selected>Pilih Lulusan</option>
                <option value="S1">S1 / D4 (Strata 1/DIPLOMA 4)</option>
                <option value="S2">S2 / Strata 2 (Magister)</option>
                <option value="S3">S3 / Strata 3 (Doktoral)</option>
                <option value="D1">D1 / DIPLOMA 1</option>
                <option value="D2">D2 / DIPLOMA 2</option>
                <option value="D3">D3 / DIPLOMA 3</option>
                <option value="SMA/K/MA">SMA/K/MA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
              </select>
        </div>

        <div class="col">
            <p>Gender</p>
            <select name="gender" class="form-select" aria-label="Default select example">
                <option selected>Pria</option>
                <option value="1">Wanita</option>
                <option value="2">All Gender</option>
              </select>
        </div>

        <div class="col-sm-1">
            <p>Usia</p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Usia
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="form-check">
                            <input name="usia" class="form-check-input" type="checkbox" value="" id="u18">
                            <label class="form-check-label" for="flexCheckDefault">Usia > 18 Tahun</label>
                        </div>
                    </li>
                  <li>
                    <div class="form-check">
                        <input name="usia" class="form-check-input" type="checkbox" value="" id="u25">
                        <label class="form-check-label" for="flexCheckDefault">Usia < 25 Tahun</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                        <input name="usia" class="form-check-input" type="checkbox" value="" id="u35">
                        <label class="form-check-label" for="flexCheckDefault">Usia < 35 Tahun</label>
                    </div>
                  </li>
                </ul>
            </div>
        </div>
        
        <div class="col-sm-1">
            <p>Durasi Kerja</p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Waktu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="form-check">
                            <input name="durasi" class="form-check-input" type="checkbox" value="" id="fulltime">
                            <label class="form-check-label" for="flexCheckDefault">Full Time</label>
                        </div>
                    </li>
                  <li>
                    <div class="form-check">
                        <input name="durasi" class="form-check-input" type="checkbox" value="" id="parttime">
                        <label class="form-check-label" for="flexCheckDefault">Part Time</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                        <input name="durasi" class="form-check-input" type="checkbox" value="" id="freelance">
                        <label class="form-check-label" for="flexCheckDefault">Freelance</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                        <input name="durasi" class="form-check-input" type="checkbox" value="" id="magang">
                        <label class="form-check-label" for="flexCheckDefault">Magang</label>
                    </div>
                  </li>
                </ul>
            </div>
        </div>
        
          <div class="col">
            <p>Lokasi</p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Lokasi
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="form-check">
                            <input name="lokasi" class="form-check-input" type="checkbox" value="" id="fulltime">
                            <label class="form-check-label" for="flexCheckDefault">Seluruh Wilayah</label>
                        </div>
                    </li>
                  <li>
                    <div class="form-check">
                        <input name="lokasi" class="form-check-input" type="checkbox" value="" id="parttime">
                        <label class="form-check-label" for="flexCheckDefault">Bandung</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                        <input name="lokasi" class="form-check-input" type="checkbox" value="" id="freelance">
                        <label class="form-check-label" for="flexCheckDefault">Jakarta</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="magang">
                        <label class="form-check-label" for="flexCheckDefault">Surabaya</label>
                    </div>
                  </li>
                </ul>
            </div>
          </div>
          <div class="col">
          
              <button type="submit" class="btn btn-light">Cari</button>
            </div>
      </div>
    </form>
  </div>
        
<br/>
<br/>
<br/>

<!-- Main Card Loker -->
<?php
  include("koneksidb.php");
  $filter=[];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach($_POST as $key => $value) {
      if (is_array($value)) {
        $f=[];
        foreach($value as $k => $v) {
          if ($key=="usia_max") {
            $f[]="{key} <= '{$v}'";
          } else $f[]="{key} = '{$v}";
        }
        $filter[]="(".implode(" or ", $f).")";
      } else {
        if(!empty($value)) $filter[]="{$key} = '{$value}'";
      }
    }
  } 
  if(empty($filter)) {
    $sql = "SELECT * FROM loker";
  } else $sql = "SELECT * FROM loker WHERE " . implode(" and ",$filter);


  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
        $col = 0;
        echo '<div class="container">';
          while($row = mysqli_fetch_array($result)){
          if($col%4==0) {
                echo "<div class='row'>";
              };
            echo '
            
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="'.$row["logo"].'" class="card-img-top" alt="icbp">
                <div class="card-body">
                  <h5 class="card-title">'.$row["nama_pt"].'</h5>
                  <h6 class="card-title">'.$row["bidang_kerja"].'</h6>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Di Butuhkan Lulusan : <strong>'.$row["lulusan_min"].'</strong></li>
                  <li class="list-group-item">Gender : <strong>'.$row["gender"].'</strong></li>
                  <li class="list-group-item">Usia : <strong>&lt;'.$row["usia_max"].' Tahun</strong></li>
                  <li class="list-group-item">Durasi : <strong>'.$row["durasi"].'</strong></li>
                  <li class="list-group-item">Gaji : <strong>&gt; '.$row["gaji"].' Rupiah</strong></li>
                  <li class="list-group-item">Lokasi : <strong>'.$row["lokasi"].'</strong></li>
                  <li class="list-group-item">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$row["idloker"].'" aria-expanded="false" aria-controls="flush-collapseOne">
                            Deskripsi Kerja
                          </button>
                        </h2>
                        <div id="flush-collapse'.$row["idloker"].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">'.$row["deskripsi"].'</div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="card-body">
                  <a href="'.$row["link_pt"].'" class="card-link">Link Perusahaan</a>
                  <a href="'.$row["desk_lengkap"].' class="card-link">Detail Lowongan</a>
                </div>
              </div>
            </div>';
            $col++;
            if($col%4==0) {
                echo "</div><br>";
              }
          }
          echo "</div>";
          // Free result set
          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  
  // Close connection
  mysqli_close($conn);
?>

<br/>
<br/>
<br/>

<!-- Table of Content-->
<div class="container">
  <div class="row">
    <h2>Pekerjaan Yang Paling diminati di 2022</h2>
  </div>
    <div class="container mt-5">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Bidang</th>
              <th scope="col">Pelatihan Khusus</th>
              <th scope="col">Total Minat (%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Data Analyst</td>
              <td>Programming Language</td>
              <td>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75% Peminat</div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Data Scientist</td>
              <td>Database and SCM</td>
              <td>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70% Peminat</div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Software Engineer</td>
              <td>Computer Management</td>
              <td>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65% Peminat</div>
                </div>
              </tr>
            </tr>
          </tbody>
        </table>
  </div>
</div>
    
<br/>
<br/>
<br/>

<!-- Footer -->
    <div class="container">
        <iframe src="footer.html" width="1280" height="480">404</iframe>
    </div>

    </body>
</html>