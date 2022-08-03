<!-- 
	Created by:
	NIM			: 10121918
	Nama		: Ahmad Nasir
	Kelas		: IF9
	Kelompok	: AIL
 -->

<?php

$conn = mysqli_connect("localhost", "root", "", "siloker");

// Manggil Inputan
function cekNik($username)
{
  global $conn;
  $queryNik = mysqli_query($conn, "SELECT nik FROM profil WHERE username = '$username' ");
  $resultNik = mysqli_fetch_array($queryNik);
  if ($resultNik != null) {
    $nik = $resultNik['nik'];
  } else {
    $nik = 0;
  }
  return $nik;
}

function cekNamaLengkap($username)
{
  global $conn;
  $queryNamaLengkap = mysqli_query($conn, "SELECT nama FROM profil WHERE username = '$username' ");
  $resultNamaLengkap = mysqli_fetch_array($queryNamaLengkap);
  if ($resultNamaLengkap != null) {
    $namaLengkap = $resultNamaLengkap['nama'];
  } else {
    $namaLengkap = 0;
  }
  return $namaLengkap;
}

function cekEmail($username)
{
  global $conn;
  $queryEmail = mysqli_query($conn, "SELECT email FROM profil WHERE username = '$username' ");
  $resultEmail = mysqli_fetch_array($queryEmail);
  if ($resultEmail != null) {
    $email = $resultEmail['email'];
  } else {
    $email = 0;
  }
  return $email;
}

function cekHP($username)
{
  global $conn;
  $queryhp = mysqli_query($conn, "SELECT hp FROM profil WHERE username = '$username' ");
  $resulthp = mysqli_fetch_array($queryhp);
  if ($resulthp != null) {
    $hp = $resulthp['hp'];
  } else {
    $hp = 0;
  }
  return $hp;
}

function cekKota($username)
{
  global $conn;
  $querykota = mysqli_query($conn, "SELECT lokasi FROM profil WHERE username = '$username' ");
  $resultkota = mysqli_fetch_array($querykota);
  if ($resultkota != null) {
    $kota = $resultkota['lokasi'];
  } else {
    $kota = 0;
  }
  return $kota;
}

function cekAlamat($username)
{
  global $conn;
  $queryalamat = mysqli_query($conn, "SELECT alamat FROM profil WHERE username = '$username' ");
  $resultalamat = mysqli_fetch_array($queryalamat);
  if ($resultalamat != null) {
    $alamat = $resultalamat['alamat'];
  } else {
    $alamat = 0;
  }
  return $alamat;
}

?>