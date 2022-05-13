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
    <title>Tech-map fields</title>
    <link rel="stylesheet" href="css/Map styles.css">
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
                 <h2>Let's start with what exactly is programming:</h2>
                 <p>Programming is how you get computers to solve problems and create new things. without the programmer (you), the computer is useless. It does what you tell it to do.
                    Computer programs (or software) are what makes computers work. Without software, computers are just complicated machines for turning electricity into heat. 
                    It's software on your computer that runs your operating system, browser, email, games, movie player just about everything. 
                    Programming is a creative task: there is no right or wrong way to solve a problem, in the same way, that there is no right or wrong way to paint a picture.
                    There are choices to be made, and one way may seem better than another, 
                    but that doesn't mean the other is wrong! With the right skills and experience, a programmer can craft software to solve an unlimited number of problems.
                </p>
                <br> <br>
                <h2>Programming languages:</h2>
                <p>
                    computers don't understand languages like English or Arabic , so we have to use a programming language they understand to give them instructions.
                    There are many different programming languages, all of which have their own pros, and certain languages are better suited to particular types of tasks, but there is no one language that is the best.
                    there is so many different languages that do many different tasks or even sometimes do the same things and it can be confusing so we are going to give you the different fields that you can specialize into and then we will tell you what languages you need for that specific field
                </p>
             </div>
         </div>
     </div>
    
     <!-- Services section -->
     <div class="services">
         <h1>These are some of the different programming fields </h1> <br> <br>
         <div class="services__container">
             <div class="services__card">
                 <h3>Web Development</h3>
                 <button onclick="window.location.href='web dev.php'">Get started</button>
             </div>
             <div class="services__card">
                 <h3>Mobile App Development</h3>
                 <button onclick="window.location.href='mobile dev.php'">Get started</button>
             </div>
             <div class="services__card">
                 <h3>Video Game Development</h3>
                 <button onclick="window.location.href='game dev.php'">Get started</button>
             </div>
             <div class="services__card">
                 <h3>Desktop App Development</h3>
                 <button onclick="window.location.href='desktop.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Database Administrator</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Computer System Analyst</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Embedded Systems</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Data Scientist</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>DevOps</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Operating system</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Artificial Intelligence</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
             </div>
             <div class="services__card">
             <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                 <h3>Cyber Security</h3>
                 <button onclick="window.location.href='coming soon.php'">Get started</button>
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
                <!-- <a href="/">LinkedIn</a> -->
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
                <a href="homepage.php" id="footer__logo" class="footer__logo"><i class="fa-solid fa-laptop-code"></i>TECH-MAP</a>
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
