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
        <title>Siloker - Main Loker</title>
        <!-- Links -->
        <base href="loker.php">
        <link rel="icon" href="multimedia/image/siloker.png" type="image/icon type">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d13b076ab0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    </head>

    <body>
    <!-- Navbar (Brands) -->
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="dashloker.php">SILOKER</a>
                </div>
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

<?php
  include("koneksidb.php");
  $WHERE = "";
  if ($_POST and $_POST["bidang_kerja"]) {
    $WHERE = $WHERE . "'" .$_POST["bidang_kerja"] ."'" ;
  };

  if ($_POST and $_POST["lulusan_min"]) {
    $WHERE = $WHERE . " and " . "'"  . $_POST["lulusan_min"]. "'" ;
  };
  $sql = "SELECT * FROM loker " . $WHERE;


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
       <iframe src="footer.html" width="1280" height="480"></iframe>

    </body>
</html>