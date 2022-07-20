<?php
    // variable pendefinisian kredensial
    require('config.php');
    $sql = "select * from masuk";
    $usernamelogin = 'iki';
    $passwordlogin = 'iki';

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan kredensial login
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: berhasil_login.php");
    } 
    else {
        header("Location: index.php");
   }
?>