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
        <!-- Styles Extras -->
        <style>
          table, th, td{
            border : 1px solid;
            border-collapse: separate;
          }
          th , td {
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 40px;
          }
          .inidesk {
            width: 70%;
          }
        </style>
    </head>

    <body>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="controladmin.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="datatabeladmin.html">Data Tabel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="editdataadmin.html">Edit/Tambah Data</a>
                </li>
              </ul>
        </div>

        <br>
        
        <div class="container">
          <h3>Tabel Data Loker (Lowongan Kerja)</h3>
          
          <div class="container">
            <table>
              <tr>
                <th>Idloker</th>
                <th>Alamat logo</th>
                <th>Nama Perusahaan</th>
                <th>Bidang Kerja</th>
                <th>Lulusan Minimal</th>
                <th>Jenis Kelamin</th>
                <th>Usia Maksimal</th>
                <th>Durasi</th>
                <th>Gaji</th>
                <th>Lokasi</th>
                <th class="inidesk">Deskripsi</th>
                <th>Link Perusahaan</th>
                <th>Link Deskripsi</th>
                <th>Edit</th>
              </tr>

              <tr>
                <td>0001</td>
                <td>multimedia/image/mainloker/ateja.jpg</td>
                <td>PT. ATEJA TRINUNGGAL</td>
                <td>SALES MARKETING</td>
                <td>S1</td>
                <td>All Gender</td>
                <td>30</td>
                <td>Full Time</td>
                <td>3000000</td>
                <td>BANDUNG</td>
                <td>Mampu Bekerja dalam Tim Mampu Bekerja dalam Tim Lo...</td>
                <td><a href="https://www.ateja.co.id">https://www.ateja.co.id</a></td>
                <td><a href="https://www.career.ateja.co.id">https://www.career.ateja.co.id</a></td>
                <td><a href="#">Edit</a></td>
              </tr>
              
              <tr>
                <td>0001</td>
                <td>multimedia/image/mainloker/ateja.jpg</td>
                <td>PT. ATEJA TRINUNGGAL</td>
                <td>SALES MARKETING</td>
                <td>S1</td>
                <td>All Gender</td>
                <td>30</td>
                <td>Full Time</td>
                <td>3000000</td>
                <td>BANDUNG</td>
                <td>Mampu Bekerja dalam Tim Mampu Bekerja dalam Tim Lo...</td>
                <td><a href="https://www.ateja.co.id">https://www.ateja.co.id</a></td>
                <td><a href="https://www.career.ateja.co.id">https://www.career.ateja.co.id</a></td>
                <td><a href="#">Edit</a></td>
              </tr>

              <tr>
                <td>0001</td>
                <td>multimedia/image/mainloker/ateja.jpg</td>
                <td>PT. ATEJA TRINUNGGAL</td>
                <td>SALES MARKETING</td>
                <td>S1</td>
                <td>All Gender</td>
                <td>30</td>
                <td>Full Time</td>
                <td>3000000</td>
                <td>BANDUNG</td>
                <td>Mampu Bekerja dalam Tim Mampu Bekerja dalam Tim Lo</td>
                <td><a href="https://www.ateja.co.id">https://www.ateja.co.id</a></td>
                <td><a href="https://www.career.ateja.co.id">https://www.career.ateja.co.id</a></td>
                <td><a href="#">Edit</a></td>
              </tr>
            </table>
          </div>
        </div>



    </body>
</html>