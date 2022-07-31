<?php
include "koneksidb.php";
// require 'function.php';
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