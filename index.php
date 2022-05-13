
<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: homepage.php");
        die();
    }

    include 'config.php';
    $msg = "";

    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: index.php");
        }
    }

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (empty($row['code'])) {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: homepage.php");
            } else {
                $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>tech-map login</title>
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
                    <a href="homepage.php" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="map.php" class="navbar__links">Careers</a>
                </li>
                <li class="navbar__item">
                    <a href="about.php" class="navbar__links">About</a>
                </li>
                <li class="navbar__item">
                    <a href="contact.php" class="navbar__links">Contact</a>
                </li>
                <li class="navbar__item">
                    <a href="tools.php" class="navbar__links">Tools</a>
                </li>
                <li class="navbar__btn">
                    <a href="register.php" class="button">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p>Login with your account to be able to access our content. </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Email" required>
                            <input type="password" class="password" name="password" placeholder="Password" style="margin-bottom: 2px;" required>
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button name="submit" name="submit" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>join us here! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/pic18.svg" alt="">
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
                    <a href="about.php">How it works</a>
                    <!-- <a href="/">Testimonials</a> -->
                    <a href="map.php">careers</a>
                    <!-- <a href="/">Partners</a> -->
                </div>
                <div class="footer__link--items">
                    <h2>Contact us</h2>
                    <a href="contact.php">contact</a>
                    <!-- <a href="contact.php">support</a> -->
                    <!-- <a href="/">sponsorships</a> -->
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Follow</h2>
                    <!-- <a href="/">Facebook</a> -->
                    <!-- <a href="/">Twitter</a> -->
                    <a href="https://github.com/punsher77777/Tech-Map/tree/Full-Dynamic-Version" target="_blank">Github</a>
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
                    <a href="homepage.php" id="footer__logo"><i class="fa-solid fa-laptop-code"></i>TECH-MAP</a>
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