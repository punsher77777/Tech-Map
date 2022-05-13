

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
    <title>Tech-map Game dev</title>
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
            
                <h2>Game Dev: <img src="images/game.png"/></h2>
                <p>
                Game Development is the art of creating games and describes the design, development and release of a game. It may involve concept generation, design, build, test and release. While you create a game, it is important to think about the game mechanics, rewards, player engagement and level design. <br> <br>

                A game developer could be a programmer, a sound designer, an artist, a designer or many other roles available in the industry.

                Game Development can be undertaken by a large Game Development Studio or by a single individual. It can be as small or large as you like. As long as it lets the player interact with content and is able to manipulate the game’s elements, you can call it a ‘game’. <br> <br>

                To get involved in the Game Development process, you do not need to write code. Artists may create and design assets, while a Developer might focus on programming a health bar. A Tester may get involved to see that the game works as expected.   <br><br>

               <h2> Game Engines:</h2> <br><p>
               Game Engines can make the process of creating a game much easier and enable developers to reuse lots of functionality. It also takes care of rendering for 2D and 3D Graphics, physics and collision detection, sound, scripting and much more. <br> <br>

                Some Game Engines have a very steep learning curve such as CryEngine or Unreal Engine. Yet, other tools are very accessible to beginners and some do not even need you to be able to write code to create your game, e.g. Construct 2. <br> <br>

                The Unity Game Engine ranges somewhere in the middle, while it is beginner friendly, some popular and commercial games have been built using Unity (e.g. Overcooked, Superhot). <br> <br>

                <h2>Typical Game Engines:</h2> <br><p>

                CryEngine <br>
                Unreal Engine (Most Used)<br>
                Unity Game Engine (Most used)<br>
                Game Maker <br>
                Construct 2 or 3 <br>
                Twine <br> 
                Source <br> 
                Frostbite <br>
                Buildbox <br> <br>

                <h2>Game dev knowledge & learning:</h2>
                <p>
                    <a href="https://unity.com/" target="_blank">Unity </a> (Documentation and official tutorials)<br> <br>
                    <a href="https://www.unrealengine.com/en-US/" target="_blank"> Unreal </a> (Documentation and official tutorials)<br> <br>
                    <a href="https://www.youtube.com/watch?v=gB1F9G0JXOo" target="_blank"> Freecodecamp  </a> (Unity tutorial)<br> <br>
                    <a href="https://www.youtube.com/watch?v=iHF5fwsqu4I" target="_blank"> Freecodecamp  </a> (2D game development with Gdevelop)<br> <br>

                

                
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