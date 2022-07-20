<?php 
    //PAGE LOGIN KIRIM VARIABLE
    session_start();
    $_SESSION['nik'] = $shareNIK;

    //PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
    session_start();
    $shareNIK = $_SESSION['nik'];
    $query="SELECT dataYangdibutuhkan FROM `profil` WHERE nik = $shareNIK";
?>