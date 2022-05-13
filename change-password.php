<?php

$msg = "";

include 'config.php';

if (isset($_GET['reset'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['reset']}'")) > 0) {
        if (isset($_POST['submit'])) {
            $password = mysqli_real_escape_string($conn, md5($_POST['password']));
            $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

            if ($password === $confirm_password) {
                $query = mysqli_query($conn, "UPDATE users SET password='{$password}', code='' WHERE code='{$_GET['reset']}'");

                if ($query) {
                    header("Location: index.php");
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>Reset Link do not match.</div>";
    }
} else {
    header("Location: forgot-password.php");
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>tech-map change password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    
 <!-- Navbar section -->
 <nav class="navbar">
        <div class="navbar__container">
            <a href="homepage.php" id="navbar__logo"><i class="fa-solid fa-laptop-code"></i>TECH-MAP</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>

            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.html" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="map.html" class="navbar__links">Careers</a>
                </li>
                <li class="navbar__item">
                    <a href="about.html" class="navbar__links">About</a>
                </li>
                <li class="navbar__item">
                    <a href="contact.html" class="navbar__links">Contact</a>
                </li>
                <li class="navbar__item">
                    <a href="tools.php" class="navbar__links">Tools</a>
                </li>
                <li class="navbar__btn">
                    <a href="sign up.html" class="button">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">

                    <div class="content-wthree">
                        <h2>Change Password</h2>
                        <p>Enter your new password. </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="password" class="password" name="password" placeholder="New Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                            <button name="submit" class="btn" type="submit">Change Password</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="index.php">Login</a>.</p>
                        </div>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/pic21.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- Footer section -->
     <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About us</h2>
                    <a href="about.html">How it works</a>
                    <!-- <a href="/">Testimonials</a> -->
                    <a href="map.html">careers</a>
                    <!-- <a href="/">Partners</a> -->
                </div>
                <div class="footer__link--items">
                    <h2>Contact us</h2>
                    <a href="contact.html">contact</a>
                    <!-- <a href="contact.html">support</a> -->
                    <!-- <a href="/">sponsorships</a> -->
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Follow</h2>
                    <!-- <a href="/">Facebook</a> -->
                    <!-- <a href="/">Twitter</a> -->
                    <a href="/">LinkedIn</a>
                    <a href="/">Github</a>
                </div>
                <div class="footer__link--items">
                    <h2>Legal</h2>
                    <a href="/">Privacy policy</a>
                    <a href="/">terms of service</a>
                </div>
            </div>
        </div>
        <div class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="index.html" id="footer__logo"><i class="fa-solid fa-laptop-code"></i>TECH-MAP</a>
                </div>
                <p class="website__rights">Tech-Map 2022. All rights Reserved</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <script src="js/app.js"></script>
</body>

</html>