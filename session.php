<?php 
    //PAGE LOGIN KIRIM VARIABLE
    session_start();
    $_SESSION['username'] = $shareUsername;

    //PAGE SELANJUTNYA YANG MENDAPAT VARIABLE
    session_start();
    $shareUsername = $_SESSION['username'];
    $query="SELECT dataYangdibutuhkan FROM `profil` WHERE username = $shareUsername";
?>