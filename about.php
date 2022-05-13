

<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        // echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-map about</title>
    <link rel="stylesheet" href="css/about.css">
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
                <a href="logout.php" class="button"><?php echo "Welcome " . $row['name']; ?>, logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero section -->
     <div class="main">
         <div class="main__container">
             <div class="main__content">
                 <h2>What do we do ?</h2>
                 <p>Our website aims to help people interested in
                    programming understand what they should start with and
                    where they can learn these languages and what is a
                    programming language and the different types of
                    languages that a programmer can learn and use. <br> <br> It will also include the different fields there are that
                    someone can learn and what every field requires for you
                    to learn
                    we are also going to recommend different courses and give you a road map on what you should do in the field that you picked...
                </p>
                <br> <br>
                <h2>Who are we ?</h2>
                <p>
                   We are grad students who studies BIS and we didn't start learning programming from out first year in college
                   we started at our third year and when we reached our grad year and we were supposed to make a project we could't be more lost than this. <br> <br>
                   we didn't know what to do and how to do it so we decided to create this website and to start guiding lost students like us through the vast fields of programming but not only students we aim to help anyone 
                   who is interested in programming.
                </p> <br> <br>
                <h2>How can we help you learn ?</h2>
                <p>
                    we will provide you with general information about programming and we will have multiple fields on the website that you can choose to specialize in so go take a look at each 
                    field as we descripe the field and the languages and tools you will need for each speciality.
                    <br> <br> we will also recommend courses and videos for you to watch so that you can start your journey without being totally lost 
                    but remember programming is not just watching videos it's mostly practice you will only learn properly if you practice alot so write alot of programs that do random stuff
                    start easy and don't lose hope it takes time.
                </p>
             </div>
         </div>
     </div>
    
 

<!-- Footer section -->

<div class="footer__container">

    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>About us</h2>
                <a href="about.php">How it works</a>
                <a href="map.php">careers</a>
            </div>
            <div class="footer__link--items">
                <h2>Contact us</h2>
                <a href="contact.php">contact</a>
            </div>
        </div>
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>Follow</h2>
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
             <a href="" class="social__icon--link" target="_blank">
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
