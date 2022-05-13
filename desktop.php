

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
    <title>Tech-map Desktop app</title>
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
            
                <h2>Desktop app Dev: <img src="images/desktop.png"/></h2>
                <p>
                Desktop application development is a process where developers build applications that can be used on desktops and laptops. These apps are usually built for Windows, macOS, Linux, or other desktop operating systems. 
                <br> <br> The list of software categories includes personal productivity software (e.g., word processors), media creation and editing (e.g., video editors), and entertainment (e.g., games).
                <br> <br> Desktop applications don’t require any internet connection to run, and users have to download and install them on their computers.
                The desktop applications can be developed in different languages, including C/C++, Java, Python, Ruby on Rails (ROR), PHP, Perl, etc., typically using libraries like Qt or GTK+.  
                <br> <br>
                <h2> Desktop app languages:</h2> <br><p>
                1. C# <br>
                C# is an advanced, type-safe, and object-oriented programming language designed and developed by Microsoft Corporation.
                Although holding its origins in the C family, it will be close to the JAVA and JavaScript programmers. As Microsoft builds C# and Windows developers can efficiently design a windows-based desktop app. In addition, C# allows developers to create various types of robust and secure apps that work on the .NET ecosystem.
                <br> <br>
                2. C++ <br>
                C++ is a general-purpose, procedural programming language that has the power to manage system resources. It can be used for desktop applications and more like browsers or games. A programmer can use IDEs to edit the source code of C/C++ programs; some examples are Eclipse, NetBeans, Qt Creator, Visual Studio (VS), XCode, etc.
                <br><br>
                3. Python <br>
                Python has become one of the most widespread programming languages in recent years. It’s applied in everything from machine learning to building websites and software testing. Moreover, python is a general-purpose language, which means it’s created to be used in a range of apps, including data science, software and web development, automation, and generally getting stuff done.
                <br> <br>
                4. Java <br>
                Java is a high-level programming language primarily used to develop computer applications. Its syntax is similar to C and C++ because it was designed to be “a better C.” Java has many features helpful in developing software, including object-orientation, modularity, strong typing for variables and constants, exception handling for error management, threads for concurrent programming.
                A recent version of Java includes lambda expressions which make coding simpler.
                <br> <br>
                5. JavaScript <br>
                JavaScript is a programming language that was designed to make web-page authoring easier. It’s used in many popular web browsers, and it provides the interactive features you see on most websites.
                JavaScript can be used to do things like show message boxes, validate input fields, modify page content, create dropdown menus and perform calculations with everything from simple mathematical expressions to complex trigonometric functions. 
                <br> <br>

                6. Flutter <br> 
                Flutter is Google's UI toolkit for building beautiful, natively compiled applications for mobile, web, and desktop from a single codebase.  <br> <br> 
              

                <h2>Desktop app knowledge & learning:</h2>
                <p>
                    <a href="https://www.youtube.com/watch?v=wfWxdh-_k_4" target="_blank">C# App </a><br> <br>
                    <a href="https://www.youtube.com/watch?v=8jLOx1hD3_o" target="_blank"> C++ Tutorial </a><br> <br>
                    <a href="https://www.youtube.com/watch?v=YXPyB4XeYLA" target="_blank"> Python Tkinter tutorial  </a><br> <br>
                    <a href="https://www.youtube.com/watch?v=qH9mWpYMtYU" target="_blank"> Java app  </a><br> <br>

                

                
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