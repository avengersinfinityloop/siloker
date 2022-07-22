<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    include 'koneksi.php';
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
            $error = "Bisa Masuk Gak Sih Bro";
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