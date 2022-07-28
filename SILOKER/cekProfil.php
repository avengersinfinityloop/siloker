<!-- 
    Created by :
    Nama : Muhamad Sidik Nur Rizki
    NIM : 10121901
    Kelas : IF-9

    Created on : 20220720
    page name: cekprofil.php
    total line : ....line
    logs : v0.1.20220720
         : v0.2.20220721

 -->

<?php
    session_start();
    $shareUsername = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
    <title>Data | Profil</title>
</head>
<body>
    <?php
        require("fungsi.php");
        $sql = "SELECT * FROM profil";
     ?>
    <center>
        <h1 style="font-size: 3em; font-family: sans-serif">DATA ANDA</h1>
        <hr style="border: 1;
            height: 1px;
            background: #333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);">
    </center>
    <h2 style="font-size: 2em; font-family: sans-serif">Data Diri</h2>
    <center>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Status</th>
                    <th scope="col">Kebangsaan</th>
                    <th scope="col">Gaji Harapan</th>
                    <th scope="col">Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n=1;
                    do
                    {
                    list($nik,$username,$nama,$tanggalLahir,$jenisKelamin,$status,$kebangsaan,$gajiHarapan
                    ,$telepon,$hp,$email,$lokasi,$alamat,$kodePos
                    ,$pendidikan,$namaSekolah,$jurusan,$prestasi,$tahunLulus,$nilai
                    ,$namaPerusahaan,$jabatan,$bidang,$lokasiKerja,$gajiPengalaman,$tanggalMulai,$tipeKontrak
                    ,$namaOrganisasi,$posisi,$deskripsi,$periode
                    ,$pelatihan,$deskripsiPelatihan,$penyelenggara,$tanggalKeluar)=$row;

                    echo "<tr>
                        <td>$n</td>
                        <td>$nik</td>
                        <td>$username</td>
                        <td>$nama</td>
                        <td>$tanggalLahir</td>
                        <td>$jenisKelamin</td>
                        <td>$status</td>
                        <td>$kebangsaan</td>
                        <td>$gajiHarapan</td>
                        <td>
                            <a href='editProfil.php?nik=$nik' class='btn btn-outline-warning'>Edit</a>
                            <a href='hapusProfil.php?nik=$nik' class='btn btn-outline-danger'>Delete</a>
                        </td>
                      </tr>";
                    $n++;
                    }
                    while($row=mysqli_fetch_row($hasil));
                ?>
            </tbody>
        </table>
    </center>
    <br>
    <h2 style="font-size: 2em; font-family: sans-serif">Kontak</h2>
    <center>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n = 1;
                    do
                    {
                    list($nik,$username,$nama,$tanggalLahir,$jenisKelamin,$status,$kebangsaan,$gajiHarapan
                    ,$telepon,$hp,$email,$lokasi,$alamat,$kodePos
                    ,$pendidikan,$namaSekolah,$jurusan,$prestasi,$tahunLulus,$nilai
                    ,$namaPerusahaan,$jabatan,$bidang,$lokasiKerja,$gajiPengalaman,$tanggalMulai,$tipeKontrak
                    ,$namaOrganisasi,$posisi,$deskripsi,$periode
                    ,$pelatihan,$deskripsiPelatihan,$penyelenggara,$tanggalKeluar)=$row;

                    echo "<tr>
                            <td>$n</td>
                            <td>$telepon</td>
                            <td>$hp</td>
                            <td>$email</td>
                            <td>$lokasi</td>
                            <td>$alamat</td>
                            <td>$kodePos</td>
                            <td>
                                <a href='editProfil.php?nik=$nik' class='btn btn-outline-warning'>Edit</a>
                                <a href='hapusProfil.php?nik=$nik' class='btn btn-outline-danger'>Delete</a>
                            </td>
                        </tr>";
                    $n++;
                    }
                    while($row=mysqli_fetch_row($hasil));
                ?>
            </tbody>
        </table>
    </center>
    <br>
    <h2 style="font-size: 2em; font-family: sans-serif">Pendidikan</h2>
    <center>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Prestasi</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n = 1;
                    do
                    {
                    list($nik,$username,$nama,$tanggalLahir,$jenisKelamin,$status,$kebangsaan,$gajiHarapan
                    ,$telepon,$hp,$email,$lokasi,$alamat,$kodePos
                    ,$pendidikan,$namaSekolah,$jurusan,$prestasi,$tahunLulus,$nilai
                    ,$namaPerusahaan,$jabatan,$bidang,$lokasiKerja,$gajiPengalaman,$tanggalMulai,$tipeKontrak
                    ,$namaOrganisasi,$posisi,$deskripsi,$periode
                    ,$pelatihan,$deskripsiPelatihan,$penyelenggara,$tanggalKeluar)=$row;

                    echo "<tr>
                            <td>$n</td>
                            <td>$pendidikan</td>
                            <td>$namaSekolah</td>
                            <td>$jurusan</td>
                            <td>$prestasi</td>
                            <td>$tahunLulus</td>
                            <td>$nilai</td>
                            <td>
                                <a href='editProfil.php?nik=$nik' class='btn btn-outline-warning'>Edit</a>
                                <a href='hapusProfil.php?nik=$nik' class='btn btn-outline-danger'>Delete</a>
                            </td>
                        </tr>";
                    $n++;
                    }
                    while($row=mysqli_fetch_row($hasil));
                ?>
            </tbody>
        </table>
    </center>
    <br>
    <h2 style="font-size: 2em; font-family: sans-serif">Pengalaman Kerja</h2>
    <center>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Lokasi Kerja</th>
                    <th scope="col">Gaji Pengalaman</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tipe Kontrak</th>
                    <th scope="col">Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n = 1;
                    do
                    {
                    list($nik,$username,$nama,$tanggalLahir,$jenisKelamin,$status,$kebangsaan,$gajiHarapan
                    ,$telepon,$hp,$email,$lokasi,$alamat,$kodePos
                    ,$pendidikan,$namaSekolah,$jurusan,$prestasi,$tahunLulus,$nilai
                    ,$namaPerusahaan,$jabatan,$bidang,$lokasiKerja,$gajiPengalaman,$tanggalMulai,$tipeKontrak
                    ,$namaOrganisasi,$posisi,$deskripsi,$periode
                    ,$pelatihan,$deskripsiPelatihan,$penyelenggara,$tanggalKeluar)=$row;

                    echo "<tr>
                            <td>$n</td>
                            <td>$namaPerusahaan</td>
                            <td>$jabatan</td>
                            <td>$bidang</td>
                            <td>$lokasiKerja</td>
                            <td>$gajiPengalaman</td>
                            <td>$tanggalMulai</td>
                            <td>$tipeKontrak</td>
                            <td>
                                <a href='editProfil.php?nik=$nik' class='btn btn-outline-warning'>Edit</a>
                                <a href='hapusProfil.php?nik=$nik' class='btn btn-outline-danger'>Delete</a>
                            </td>
                        </tr>";
                    $n++;
                    }
                    while($row=mysqli_fetch_row($hasil));
                ?>
            </tbody>
        </table>
    </center>
    <br>
    <h2 style="font-size: 2em; font-family: sans-serif">Pengalaman Organisasi</h2>
    <center>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Organisasi</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n = 1;
                    do
                    {
                    list($nik,$username,$nama,$tanggalLahir,$jenisKelamin,$status,$kebangsaan,$gajiHarapan
                    ,$telepon,$hp,$email,$lokasi,$alamat,$kodePos
                    ,$pendidikan,$namaSekolah,$jurusan,$prestasi,$tahunLulus,$nilai
                    ,$namaPerusahaan,$jabatan,$bidang,$lokasiKerja,$gajiPengalaman,$tanggalMulai,$tipeKontrak
                    ,$namaOrganisasi,$posisi,$deskripsi,$periode
                    ,$pelatihan,$deskripsiPelatihan,$penyelenggara,$tanggalKeluar)=$row;

                    echo "<tr>
                            <td>$n</td>
                            <td>$namaOrganisasi</td>
                            <td>$posisi</td>
                            <td>$deskripsi</td>
                            <td>$periode</td>
                            <td>
                                <a href='editProfil.php?nik=$nik' class='btn btn-outline-warning'>Edit</a>
                                <a href='hapusProfil.php?nik=$nik' class='btn btn-outline-danger'>Delete</a>
                            </td>
                        </tr>";
                    $n++;
                    }
                    while($row=mysqli_fetch_row($hasil));
                ?>
            </tbody>
        </table>
    </center>
    <br>
    <h2 style="font-size: 2em; font-family: sans-serif">Pelatihan/Sertifikat</h2>
    <center>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pelatihan</th>
                    <th scope="col">Deskripsi Pelatihan</th>
                    <th scope="col">Penyelenggaraa</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n = 1;
                    do
                    {
                    list($nik,$username,$nama,$tanggalLahir,$jenisKelamin,$status,$kebangsaan,$gajiHarapan
                    ,$telepon,$hp,$email,$lokasi,$alamat,$kodePos
                    ,$pendidikan,$namaSekolah,$jurusan,$prestasi,$tahunLulus,$nilai
                    ,$namaPerusahaan,$jabatan,$bidang,$lokasiKerja,$gajiPengalaman,$tanggalMulai,$tipeKontrak
                    ,$namaOrganisasi,$posisi,$deskripsi,$periode
                    ,$pelatihan,$deskripsiPelatihan,$penyelenggara,$tanggalKeluar)=$row;

                    echo "<tr>
                            <td>$n</td>
                            <td>$pelatihan</td>
                            <td>$deskripsiPelatihan</td>
                            <td>$penyelenggara</td>
                            <td>$tanggalKeluar</td>
                            <td>
                                <a href='editProfil.php?nik=$nik' class='btn btn-outline-warning'>Edit</a>
                                <a href='hapusProfil.php?nik=$nik' class='btn btn-outline-danger'>Delete</a>
                            </td>
                        </tr>";
                    $n++;
                    }
                    while($row=mysqli_fetch_row($hasil));
                ?>
            </tbody>
        </table>
        <div class="d-grid gap-2 col-12 mx-auto">
            <a herf="#" class="btn btn-outline-primary btn-lg" id="tombolMenu">Menu Utama</a>
        </div>
    </center>
</body>
</html>