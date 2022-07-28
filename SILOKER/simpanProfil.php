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
<link rel="icon" href="multimedia/image/logo/silokerlogo.png">
<html>
<?php
require("fungsi.php");
// Data Diri
$nik = $_POST['nik'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$tanggalLahir = $_POST['tanggal_lahir'];
$jenisKelamin = $_POST['jenis_kelamin'];
$status = $_POST['status'];
$kebangsaan = $_POST['kebangsaan'];
$gajiHarapan = $_POST['gaji_harapan'];
// Kontak
$telepon = $_POST['telepon'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamat'];
$kodePos = $_POST['kode_pos'];
// Pendidikan
$pendidikan = $_POST['pendidikan'];
$namaSekolah = $_POST['nama_sekolah'];
$jurusan = $_POST['jurusan'];
$prestasi = $_POST['prestasi'];
$tahunLulus = $_POST['tahun_lulus'];
$nilai = $_POST['nilai'];
// Pengalaman Kerja
$namaPerusahaan = $_POST['nama_perusahaan'];
$jabatan = $_POST['jabatan'];
$bidang = $_POST['bidang'];
$lokasiKerja = $_POST['lokasi_kerja'];
$gajiPengalaman = $_POST['gaji_pengalaman'];
$tanggalMulai = $_POST['tanggal_mulai'];
$tipeKontrak = $_POST['tipe_kontrak'];
// Pengalaman Organisasi
$namaOrganisasi = $_POST['nama_organisasi'];
$posisi = $_POST['posisi'];
$deskripsi = $_POST['deskripsi'];
$periode = $_POST['periode'];
// Pelatihan / Sertifikat
$pelatihan = $_POST['pelatihan'];
$deskripsiPelatihan = $_POST['deskripsi_pelatihan'];
$penyelenggara = $_POST['penyelenggara'];
$tanggalKeluar = $_POST['tanggal_keluar'];
// $sertifikat = $_POST['sertifikat'];

if($nik != '')
{
    $sql = "INSERT INTO profil VALUES ('$nik','$username','$nama','$tanggalLahir','$jenisKelamin','$status','$kebangsaan','$gajiHarapan'
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
<h1>SI</h1><img src="multimedia/image/logo/silokerlogo.png" alt="test">
</html>