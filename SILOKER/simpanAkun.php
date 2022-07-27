<?php
    require("fungsi.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username != ''){
        $sql = "insert into login values ('$username','$password')";
        $hasil = mysqli_query($conn,$sql);
        echo "<script type='text/javascript'>alert('Selamat Akun Anda Berhasil Dibuat');document.location='index.php';</script>";
    }
?>