

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
    <title>Tech-map Tools</title>
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
                <h2>Tools: <img src="images/tools.png"/></h2>
                <p>Programming languages for mobile application development include Java, Kotlin, and Flutter in the market for Android development. Java and Kotlin are native that you can select to develop App for one platform at a time. Flutter is a hybrid
                    language you can use to develop applications both for Android and iOS phones and in iOS you can use objective-c and swift to build your apps.
                </p>
                <br> <br>
                <h2>Icons & Fonts:</h2>
                <p>
                    <a href="https://icons8.com/" target="_blank">Icons 8 </a> (static and animated icons)<br> <br>
                
                    <a href="https://www.flaticon.com/" target="_blank">Flat Icon </a> (static icons)<br> <br>
                
                    <a href="https://fontawesome.com/" target="_blank">Font awesome </a> (static icons)<br> <br>

                    <a href="https://fonts.google.com/" target="_blank">Google fonts</a>  (Fonts)<br> <br>

                    </p>

                <h2>Royalty free Images & video:</h2>
                <p>
                    <a href="https://pexels.com/" target="_blank">pexels </a> (For Images)<br> <br>

                    <a href="https://unsplash.com/" target="_blank">Unsplash </a> (For Images)<br> <br>

                    <a href="https://coverr.co/" target="_blank">Coverr </a> (For Video)<br> <br>

                    <a href="https://undraw.co/" target="_blank">Undraw </a> (For Illustrations)<br> <br>

                    <a href="https://drawkit.com/" target="_blank">Drawkit </a> (For icons and Illustrations)<br> <br>

                    <a href="https://www.manypixels.co/" target="_blank">Manypixels </a> (For icons and Illustrations)<br> <br>

                    </p>

                <h2>Hosting & Deployment:</h2>
                <p>
                    <a href="https://www.netlify.com/" target="_blank"> Netlify </a> (For front end web applications.)<br> <br>
                    <a href="https://pages.github.com/" target="_blank"> Github Pages </a> (For front end web applications.)<br> <br>
                    <a href="https://www.heroku.com/" target="_blank"> Heroku </a> (For back end APIs.)<br> <br>
                    <a href="https://www.000webhost.com/" target="_blank"> 000webhost </a> (For php websites and mysql database.)<br> <br>
                </p>
                <h2>MockUp Tools:</h2>
                <p>
                    <a href="https://www.figma.com/" target="_blank"> Figma</a> <br> <br>
                    <a href="https://zeplin.io/" target="_blank"> Zeplin</a> <br> <br>
                    <a href="https://invisionapp.com" target="_blank"> InvisionApp</a> (Mockup and full UI kits ready to use )<br> <br>
                </p>
                <h2>Design ideas:</h2>
                <p>
                    <a href="https://www.awwwards.com/" target="_blank"> Awwwards</a> <br> <br>
                    <a href="https://dribbble.com/" target="_blank"> dribbble</a> <br> <br>
                </p>
                <h2>Problem solving & algorithms:</h2>
                <p>
                    <a href="https://leetcode.com/" target="_blank"> leetcode</a> <br> <br>
                    <a href="https://exercism.org/" target="_blank"> Exercism</a> <br> <br>
                    <a href="https://www.codewars.com/" target="_blank"> codewars</a> <br> <br>
                    <a href="https://mem.dev/" target="_blank">mem.dev </a>(For problem solving  and practice) <br> <br>
                </p>
                
                <h2>General Tools:</h2>
                <p>
                    <a href="https://cssgradient.io/" target="_blank"> CSSGradient</a>  (for colors and linear gradient colors)<br> <br>
                    <a href="https://www.emailjs.com/" target="_blank"> Emailjs</a>  (send emails from JS without server code)<br> <br>
                    <a href="https://formspree.io/" target="_blank"> Formspree</a>  (send emails from front end without server code)<br> <br>
                    <a href="https://caniuse.com/" target="_blank"> caniuse </a> (checks if syntax is supported on devices and browsers)<br> <br>
                    <a href="https://imagecompressor.com/" target="_blank"> imagecomressor </a> (compress images to increase speed of your application)<br> <br>
                    <a href="https://css-tricks.com/" target="_blank"> css-tricks </a> (exploring new ways to deal with css)<br> <br>
                    <a href="https://stackoverflow.com/" target="_blank"> Stackoverflow </a> (search for solution of errors that faced you)<br> <br>
                    <a href="https://dev.to/" target="_blank"> Dev.to </a>  (website for developer information contains articles written by developers)<br> <br>
                    <a href="https://Indiehackers.com" target="_blank"> Indiehackers </a>  (developer stories and problems they faced launching their own companies)<br> <br>
                    <a href="https://DevDocs.io" target="_blank"> DevDocs </a>  (documantations of proramming languages and tutorials and code examples)<br> <br>
                    <a href="https://www.w3schools.com/" target="_blank"> W3SCHOOLS </a>  (tutorials and code examples)<br> <br>
                    <a href="https://www.geeksforgeeks.org/" target="_blank"> GeeksforGeeks </a>  (tutorials and code examples)<br> <br>
                    <a href="https://GitHub.com" target="_blank"> Github </a>  (resources for developers and designers and repositories for your apps)<br> <br>
                    <a href="https://github.com/Kavex/GameDev-Resources" target="_blank"> GameDev Resources </a>  (resources for Game developers and designers)<br> <br>
                  
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
                    <a href="">Privacy policy</a>
                    <a href="">terms of service</a>
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
                    <a href="" class="social__icon--link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social__icon--link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social__icon--link" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="social__icon--link" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>