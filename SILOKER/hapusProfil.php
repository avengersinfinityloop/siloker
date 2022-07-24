<!-- 
    Created by :
    Nama : Muhamad Sidik Nur Rizki
    NIM : 10121901
    Kelas : IF-9

    Created on : 20220722
    page name: profil.php
    total line : ....line
    logs : v0.1.20220722

 -->

<?php
include 'fungsi.php';

// Menyimpan Data id kedalam variable
$nik = $_GET['nik'];
$query = "DELETE FROM profil WHERE nik = '$nik'";
mysqli_query($conn,$query);
// Kembali Ke Halaman Cek Data Profil
header("location:cekProfil.php");
?>