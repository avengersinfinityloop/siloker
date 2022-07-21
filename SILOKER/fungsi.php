    <!--
        created by  :   nama    :joy mr
                        nim     :10121910
                        kelas   :IF9K
        created on              :20220623
        page name               :fungsi.php
        description             :fungsi fungsi supaya mempermudah koding
        total                   :??? pages
        logs                    :v1.0 20220717 - create file
                                :v1.0 20220720 - finish file
        [Table of contents]
    -->

<?php 
//KONEKSI DATABASE
$conn = mysqli_connect("localhost","root","","silokermain");

//FUNGSI PAGINATION CEK ROW
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
    return cekRow($query);
}

//MENG NON AKTIFKAN TAMPILAN ERROR
error_reporting(E_ERROR | E_PARSE);
?>