<?php 
require "koneksidb.php";
//FUNGSI PAGINATION
function cekRow($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//FUNGSI CARI
function cari($keyword,$awalData,$jumlahDataPerHalaman) {
    $query = "SELECT * FROM pasang_iklan WHERE 
    idIklan LIKE '%$keyword%' OR
    tanggal LIKE '%$keyword%' OR
    namaKursus LIKE '%$keyword%' OR
    bidang LIKE '%$keyword%' OR
    harga LIKE '%$keyword%' OR
    wilayah	 LIKE '%$keyword%' OR
    onlineOffline LIKE '%$keyword%' OR
    imageRegister LIKE '%$keyword%' OR
    idUser LIKE '%$keyword%'
    LIMIT $awalData, $jumlahDataPerHalaman ";
    return query($query);
}
//MENG NON AKTIFKAN TAMPILAN ERROR
error_reporting(E_ERROR | E_PARSE);
?>