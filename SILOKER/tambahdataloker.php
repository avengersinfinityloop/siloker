<!doctype html>
<!--  
      Created By  : Indi Bagus Prasetyo
      NIM         : 10121902
      Kelas       : IF-9K/S1/II
      Matkul      : Pemrograman Web 2
      Dosen       : Geraldi Catur Pamuji, S.Kom, M.Kom.
      Created File On v27072022:1113 (v.0.5)
-->
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
        <link rel="icon" href="multimedia/image/siloker.png" type="image/icon type">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d13b076ab0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="controladmin.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="datatabeladmin.php">Data Tabel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="tambahdataloker.php">Tambah Data</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="editdataloker.php">Edit Data</a>
                </li>
              </ul>
        </div>

        <br>
        <form action="datatabeladmin.php" method="POST">
        <div class="container">
          <div class="row">
            <div class="col">
              <h4>Input Gambar</h4>
              <label class="form-label" for="customFile">Masukan Logo Perushaan Terkait</label>
              <input type="file" name="logo" class="form-control" id="customFile" />
            </div>

            <div class="col">
              <h4>Nama Perusahaan</h4>
              <label class="form-label" for="nama_pt">Masukan Nama Perusahaan</label>
              <input class="form-control" name="nama_pt" type="text" placeholder="nama_pt" aria-label="default input example">
            </div>
            
            <div class="col">
              <h4>Bidang Pekerjaan</h4>
              <label class="form-label" for="bidang_kerja">Masukan Bidang Pekerjaan</label>
              <input class="form-control" name="bidang_kerja" type="text" placeholder="bidang_kerja" aria-label="default input example">
            </div>

            <div class="col">
              <h4>Lulusan Minimal</h4>
              <label class="form-label" for="lulusan_min">Pilihlah Kriteria lulusan</label>
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
          </div>

          <br>

          <div class="row">
            <div class="col">
              <h4>Gender</h4>
              <label class="form-label" for="gender">Jenis Kelamin</label>
              <select name="gender" class="form-select" aria-label="Default select example">
                <option selected>Pria</option>
                <option value="1">Wanita</option>
                <option value="2">All Gender</option>
              </select>
            </div>

            <div class="col">
              <h4>Usia Dibutuhkan</h4>
              <label class="form-label" for="usia_max">Maksimal Kriteria Usia</label>
              <input class="form-control" name="usia_max" type="number" placeholder="usia_max" aria-label="default input example">
            </div>

              <div class="col">
                <h4>Tipe Durasi Kerja</h4>
                <label class="form-label" for="durasi">Jenis Durasi yang ditetapkan</label>
                <select name="durasi" class="form-select" aria-label="Default select example">
                  <option selected>Full Time</option>
                  <option value="1">Part Time</option>
                  <option value="2">Freelance</option>
                  <option value="3">Magang</option>
                </select>
              </div>

              <div class="col">
                <h4>Gaji Perushaan</h4>
                <label class="form-label" for="gaji">Gaji Yang Ditetapkan</label>
                <input class="form-control" name="gaji" type="number" id="gaji" placeholder="masukan angka, contoh : 3000" aria-label="default input example">
              </div>
          </div>

          <br>

          <div class="row">
            <div class="col">
              <h4>Lokasi</h4>
              <label class="form-label" for="lokasi">Wilayah Kota Penetapan</label>
              <select name="lokasi" class="form-select" aria-label="Default select example">
                <option selected>Bandung</option>
                <option value="1">Jakarta</option>
                <option value="2">Surabaya</option>
                <option value="3">Medan</option>
                <option value="4">Yogyakarta</option>
                <option value="5">Subang</option>
                <option value="6">Purwakarta</option>
                <option value="7">Jabodetabek</option>
                <option value="8">Tanggerang</option>
              </select>
            </div>

            <div class="col">
              <h4>Deskripsi Kerja</h4>
              <label class="form-label" for="deskripsi">Masukan Deskripsi tentang pekerjaan terkait</label>
              <input class="form-control" name="deskripsi" type="text" placeholder="Deskripsi Informasi" aria-label="default input example">
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col">
              <h4>Link Web Perusahaan</h4>
              <label class="form-label" for="link_pt">Alamat web perushaan Terkait</label>
              <input class="form-control" name="link_pt" type="text" placeholder="link_pt" aria-label="default input example">
            </div>

            <div class="col">
              <h4>Tautan Karir</h4>
              <label class="form-label" for="desk_lengkap">Alamat tautan karir pada web terkait</label>
              <input class="form-control" name="desk_lengkap" type="text" placeholder="Tautan Deskripsi Lengkap" aria-label="default input example">
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col">
              <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
              <button type="reset" class="btn btn-outline-danger">Reset</button>
            </div>
          </form>
          </div>
        </div>
    </body>
</html>