<?php include('server.php') ?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/css/styleLogin.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form method="post" action="loginBootcamp.php">
                    <?php include('errors.php'); ?>
                    <div class="field input-field">
                        <input id="form_username" type="text" name="username" class="input" placeholder="Username *" required="required" data-error="Username is required.">
                    </div>

                    <div class="field input-field">
                        <input id="form_password" type="password" name="password" class="password" placeholder="Password *" required="required" data-error="Password is required.">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit" class="btn" name="login_user">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="style/images/logo/googlelogo.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form method="post" action="server.php">
                    <div class="field input-field">
                        <input id="form_username" type="text" name="username" class="input" placeholder="Username *" required="required" data-error="Username is required.">
                    </div>

                    <div class="field input-field">
                        <input id="form_email" type="text" name="email" class="input" placeholder="Email *" required="required" data-error="Email is required.">
                    </div>

                    <div class="field input-field">
                        <input id="form_password" type="password" name="password" class="password" placeholder="Password *" required="required" data-error="Password is required.">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field input-field">
                        <input id="form_confirmPassword" type="password" name="confirmPassword" class="password" placeholder="Confirm Password *" required="required" data-error="Password is required.">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit" class="btn" name="reg_user">Sign up</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="style/images/logo/googlelogo.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="style/js/scriptLogin.js"></script>
</body>

</html>