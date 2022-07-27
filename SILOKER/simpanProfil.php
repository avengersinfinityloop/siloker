<!-- 
    Created by :
    Nama : Muhamad Sidik Nur Rizki
    NIM : 10121901
    Kelas : IF-9

    Created on : 20220630
    page name: simpanprofil.php
    total line : ....line
    logs : v0.1.20220630
         : v0.2.20220705
         : v0.3.20220726

 -->

<?php
    session_start();
    $shareUsername = $_SESSION['username'];
?>

<link rel="stylesheet"  href="css/bootstrap.min.css">
<html>
<?php
require("fungsi.php");
// Data Diri
$nik = $_POST['nik'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$tanggalLahir = $_POST['tanggal-lahir'];
$jenisKelamin = $_POST['jenis-kelamin'];
$status = $_POST['status'];
$kebangsaan = $_POST['kebangsaan'];
$gajiHarapan = $_POST['gaji-harapan'];
// Kontak
$telepon = $_POST['telepon'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamat'];
$kodePos = $_POST['kode-pos'];
// Pendidikan
$pendidikan = $_POST['pendidikan'];
$namaSekolah = $_POST['nama-sekolah'];
$jurusan = $_POST['jurusan'];
$prestasi = $_POST['prestasi'];
$tahunLulus = $_POST['tahun-lulus'];
$nilai = $_POST['nilai'];
// Pengalaman Kerja
$namaPerusahaan = $_POST['nama-perusahaan'];
$jabatan = $_POST['jabatan'];
$bidang = $_POST['bidang'];
$lokasiKerja = $_POST['lokasi-kerja'];
$gajiPengalaman = $_POST['gaji-pengalaman'];
$tanggalMulai = $_POST['tanggal-mulai'];
$tipeKontrak = $_POST['tipe-kontrak'];
// Pengalaman Organisasi
$namaOrganisasi = $_POST['nama-organisasi'];
$posisi = $_POST['posisi'];
$deskripsi = $_POST['deskripsi'];
$periode = $_POST['periode'];
// Pelatihan / Sertifikat
$pelatihan = $_POST['pelatihan'];
$deskripsiPelatihan = $_POST['deskripsi-pelatihan'];
$penyelenggara = $_POST['penyelenggara'];
$tanggalKeluar = $_POST['tanggal-keluar'];
// $sertifikat = $_POST['sertifikat'];

if($nik != '')
{
    $sql = "insert into profil values ('$nik','$username','$nama','$tanggalLahir','$jenisKelamin','$status','$kebangsaan','$gajiHarapan'
    ,'$telepon','$hp','$email','$lokasi','$alamat','$kodePos'
    ,'$pendidikan','$namaSekolah','$jurusan','$prestasi','$tahunLulus','$nilai'
    ,'$namaPerusahaan','$jabatan','$bidang','$lokasiKerja','$gajiPengalaman','$tanggalMulai','$tipeKontrak'
    ,'$namaOrganisasi','$posisi','$deskripsi','$periode','$pelatihan','$deskripsiPelatihan','$penyelenggara','$tanggalKeluar') ";
    $hasil = mysqli_query($conn,$sql);
    echo "<center><h1>Data Selesai Ditambahkan</h1></center>";
}
else
{
    echo "Nik tidak boleh kosong";
}
?>
<br>
<center>
    <a href="profil.php" class="btn btn-primary btn-lg">Kembali</a>
    <a href="cekProfil.php" class="btn btn-success btn-lg">Cek Data</a>
</center>
<h1>SI</h1><img src="multimedia/image/loker.jpeg" alt="test">
</html>