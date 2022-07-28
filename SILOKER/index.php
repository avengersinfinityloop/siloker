<!-- 
    Created by :
    Nama : Muhamad Sidik Nur Rizki
    NIM : 10121901
    Kelas : IF-9

    Created on : 20220710
    page name: index.php
    total line : ....line
    logs : v0.1.20220710

 -->

<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    include 'fungsi.php';
    //PAGE LOGIN KIRIM VARIABLE
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="multimedia/image/logo/silokerlogo.png">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <title>Login</title>
</head>
<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT username FROM login WHERE password='$password'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
        $username2 = $row['username'];
        if($username==$username2){
            $shareUsername = $username;
            $_SESSION['username'] = $shareUsername;
            header('location:profil.php');
        }
        else{
            echo "<script type='text/javascript'>alert('Maaf email dan password anda tidak sesuai');document.location='index.php';</script>";
        }
    }
?>
<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-20 login-form">
                <h3>Login SILOKER</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username *" name="username"><br>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" name="password"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btnSubmit" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>