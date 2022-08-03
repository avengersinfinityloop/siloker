<?php
include "updatedataloker.php";
// require 'function.php';
// Created By  : Indi Bagus Prasetyo
// NIM         : 10121902
// Kelas       : IF-9K/S1/II
// Matkul      : Pemrograman Web 2
// Dosen       : Geraldi Catur Pamuji, S.Kom, M.Kom.
// Created File On v27072022:1113 (v.0.5)
$id = $_GET["id"];
mysqli_query($conn, "DELETE FROM loker WHERE idloker = $id");
$r = mysqli_affected_rows($conn);



if( $r > 0) {
    echo "
    <script>
        alert('Data Berhasil dihapus!');
        document.location.href = 'datatabeladmin.php';
    </script>
    ";
    } else {
        echo "
    <script>
        alert('Data Gagal dihapus!');
        document.location.href = 'datatabeladmin.php';
    </script>
    ";
    }

?>