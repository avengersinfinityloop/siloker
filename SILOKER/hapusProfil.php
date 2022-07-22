<?php
include 'koneksi.php';

// Menyimpan Data id kedalam variable
$nik = $_GET['nik'];
$query = "DELETE FROM profil WHERE nik = '$nik'";
mysqli_query($conn,$query);
// Kembali Ke Halaman Cek Data Profil
header("location:cekProfil.php");
?>