

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
    <title>Tech-map mobile dev</title>
    <link rel="stylesheet" href="css/tools.css">
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
                <h2>Mobile Dev: <img src="https://img.icons8.com/color/96/000000/two-smartphones.png"/></h2>
                <p>Programming languages for mobile application development include Java, Kotlin, and Flutter in the market for Android development. Java and Kotlin are native that you can select to develop App for one platform at a time. Flutter is a hybrid
                    language you can use to develop applications both for Android and iOS phones and in iOS you can use objective-c and swift to build your apps.
                </p>
                <br> <br>
                <h2>Common languages used for app development: </h2> <p> 
                    Java <br> 
                    Kotlin <br> 
                    Swift <br> 
                    React Native <br> 
                    Flutter <br> <br>
                <h2> Java:</h2> <p> java is one of the foundational programming languages for Android and allows App Developers to customize just about every aspect of their programs. It's also very popular, which makes it easier to get help when you run into any issues while developing your app. Still, despite Java's functionality, it can be difficult to learn and master — so it may take a while for you to become proficient with it. <br> <br> 

                <h2>Kotlin: </h2> <p>  developed by Google and JetBrains directly in response to App Developers searching for a lighter weight and more user-friendly programming language for Android development. It still runs on the Java Virtual Machine, but it includes some fantastic simplifications that allow for faster development <br> <br> 

                <h2> Swift: </h2> <p> was developed to make it easier for App Developers on the iOS platform. Before Swift, iOS App Developers needed to use Apple's Objective-C programming language, which was old and difficult to use. <br> <br> 

                <h2> React Native: </h2> <p> While technically not a programming language, if you want your apps to be available for both Android and iOS users, React Native is the framework for you. It allows you to build apps that work on both platforms. But, before you jump right in, you'll need working knowledge of other languages and each platform.

                    Before you learn React Native, you'll need to have a good handle on JavaScript and React. App Developers who are already using other languages and are searching to add another tool to their roster will be best suited to learning React Native. If you're a Web Developer with experience using React, but you want to get into mobile app development, then React Native is an excellent choice for you as well. <br> <br>

                <h2> Flutter: </h2> <p>     developed by Google, is a UI toolkit to build native applications for the mobile, desktop &  web platform. Flutter is a cross-platform mobile app development framework that works on one code base to develop Android as well as iOS applications. The framework provides a large range of fully customizable widgets that helps to build native applications in a shorter span. Moreover, Flutter uses the 2D rendering engine called Skia for developing visuals and it’s layered architecture ensures the effective functioning of components. <br> <br> 
                
                <h2>App dev knowledge & Learning:</h2>
                <p>
                    <a href="https://developer.android.com/kotlin" target="_blank">Google Developers</a> (Kotlin)<br> <br>
                    <a href="https://www.udacity.com/course/new-android-fundamentals--ud851" target="_blank">Udacity</a> (Kotlin by google) <br> <br>
                    <a href="https://www.udacity.com/course/ios-developer-nanodegree--nd003" target="_blank"> Udacity</a>(Swift) <br> <br>
                    <a href="https://www.youtube.com/watch?v=VPvVD8t02U8" target="_blank">Freecodecamp</a> (Flutter)<br> <br>
                    <a href="https://www.udemy.com/course/complete-flutter-arabic/" target="_blank">Udemy</a> (Arabic flutter)<br> <br>
                    <a href="https://flutter.dev/learn" target="_blank">Flutter</a> (Documentation and tutorials)<br> <br> 
                    <a href="https://www.codecademy.com/catalog/subject/mobile-development" target="_blank">Codecademy</a> (Swift, Java , React Native , Kotlin)<br> <br>
                    <a href="https://www.youtube.com/c/LetsBuildThatApp/videos" target="_blank">Let's Build that app</a> (Swift tutorials)<br> <br>
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