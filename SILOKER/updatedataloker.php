<?php
include "koneksidb.php";
// require 'function.php';
if( isset($_POST["submit"])) {
    $id = $_POST["idloker"];
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
    $query = "UPDATE `loker` SET nama_pt = '$nama_pt', bidang_kerja = '$bidang_kerja',
                lulusan_min = '$lulusan_min', gender = '$gender', usia_max = '$usia_max', durasi = '$durasi',
                gaji = '$gaji', lokasi = '$lokasi', deskripsi = '$deskripsi', link_pt = '$link_pt', desk_lengkap = '$desk_lengkap'
                    WHERE idloker = '$id'
            ";

    mysqli_query($conn, $query);
    $r = mysqli_affected_rows($conn);
 
    if( $r > 0 ) {
     echo "
         <script>
             alert('Data Berhasil diperbarui!')
             document.location.href = 'datatabeladmin.php'
             </script>
             ";
         } else {
             echo "
             <script>
             alert('Data Gagal ditambahkan!')
             document.location.href = 'editdataloker.php?id=$id'
         </script>
     ";
 }
 }
?>