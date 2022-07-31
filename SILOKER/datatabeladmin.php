<?php 
include "koneksidb.php";
if( isset($_POST["submit"])) {
   $data = $_POST;
   $logo = htmlspecialchars($data["logo"]);
   $nama_pt = htmlspecialchars($data["nama_pt"]);
   $bidang_kerja = htmlspecialchars($data["bidang_kerja"]);
   $lulusan_min = htmlspecialchars($data["lulusan_min"]);
   $gender = htmlspecialchars($data["gender"]);
   $usia_max = htmlspecialchars($data["usia_max"]);
   $durasi = htmlspecialchars($data["durasi"]);
   $gaji = htmlspecialchars($data["gaji"]);
   $lokasi = htmlspecialchars($data["lokasi"]);
   $deskripsi = htmlspecialchars($data["deskripsi"]);
   $link_pt = htmlspecialchars($data["link_pt"]);
   $desk_lengkap = htmlspecialchars($data["desk_lengkap"]);

   // htmlspecialchars digunakan agar element html yang di input tidak bisa dijalankan

    // Query Insert data
   $query = "INSERT INTO `loker` 
            (`idloker`, `logo`, `nama_pt`, 
            `bidang_kerja`, `lulusan_min`, 
            `gender`, `usia_max`, `durasi`, 
            `gaji`, `lokasi`, `deskripsi`, 
            `link_pt`, `desk_lengkap`, `nik`) 
            VALUES (null,'multimedia/image/mainloker/$logo', '$nama_pt', '$bidang_kerja', '$lulusan_min',
             '$gender', '$usia_max', '$durasi', '$gaji', '$lokasi',
              '$deskripsi', '$link_pt', '$desk_lengkap', '9236598235');
           ";

   mysqli_query($conn, $query);
   $r = mysqli_affected_rows($conn);

   if( $r > 0 ) {
    echo "
        <script>
            alert('Data Berhasil ditambahkan!')
            document.location.href = 'datatabeladmin.php'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Data Gagal ditambahkan!')
            document.location.href = 'editdataloker.php'
        </script>
    ";
}
}
?>
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
                  <a class="nav-link active" href="datatabeladmin.php">Data Tabel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tambahdataloker.php">Tambah Data</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="editdataloker.php">Edit Data</a>
                </li>
              </ul>
        </div>

        <br>
        
        <div class="container">
          <h3>Tabel Data Loker (Lowongan Kerja)</h3>
          
          <div class="container">
            <table width="100%">
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
                <th>Hapus</th>
              </tr>

              <?php
              include "koneksidb.php";
              $sql = "SELECT *, LEFT(deskripsi,50) as desk FROM loker";
              if($result = mysqli_query($conn, $sql)) {
                if(mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td><?= $row["idloker"]; ?></td>
                <td><?= $row["logo"]; ?></td>
                <td><?= $row["nama_pt"]; ?></td>
                <td><?= $row["bidang_kerja"]; ?></td>
                <td><?= $row["lulusan_min"]; ?></td>
                <td><?= $row["gender"]; ?></td>
                <td><?= $row["usia_max"]; ?></td>
                <td><?= $row["durasi"]; ?></td>
                <td><?= $row["gaji"]; ?></td>
                <td><?= $row["lokasi"]; ?></td>
                <td nowrap width="10%"><?= $row["desk"]; ?>...</td>
                <td><a href="<?= $row["link_pt"]; ?>"><?= $row["link_pt"]; ?></a></td>
                <td><a href="<?= $row["desk_lengkap"]; ?>"><?= $row["desk_lengkap"]; ?></a></td>
                <td><a href="editdataloker.php?id=<?= $row["idloker"]; ?>">Edit</a></td>
                <td><a href="hapusdataloker.php?id=<?= $row["idloker"]; ?>">Hapus</a></td>
              </tr>
                <?php } 
                 }
               } ?>
              
              </tr>
            </table>
          </div>
        </div>
    </body>
</html>