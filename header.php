<?php
    include_once './session.php';
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->    
<html>
            <head>
                    <title>Gamers unite</title>
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
                    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                    <link rel="stylesheet" href="assets/css/main.css" />
                    <link rel="stylesheet" href="dist/css/lightbox.min.css">
            </head>
            <body>

                    <!-- Page Wrapper -->
                            <div id="page-wrapper">

                                    <!-- Header -->
                                            <header id="header" class="alt">
                                                <h1><a href="index.php">Gamers unite</a></h1>
                                                    <nav>
                                                            <a href="#menu">Menu</a>
                                                    </nav>
                                            </header>

                                    <!-- Menu -->
                                            <nav id="menu">
                                                    <div class="inner">
                                                            <h2>Menu</h2>
                                                            <?php
                                                                if ($_SESSION) {
                                                                    echo '<li><a href="index.php">Home</a></li>';
                                                                    echo '<li><a href="games.php">Games!</a></li>';
                                                                    echo '<li><a href ="add_game.php">Add your game here </a></li>';
                                                                    echo '<li><a href ="edit_profile.php">Edit Profile </a></li>';
                                                                    echo '<li><a href="./logout.php"> Logout </a></li>';
                                                                }
                                                                else {
                                                                    echo '<li><a href="./login.php">Log In</a></li>';
                                                                    echo '<li><a href="./add_user.php">Sign Up</a></li>';
                                                                }
                                                                ?>
                                                            <a href="#" class="close">Close</a>
                                                    </div>
                                            </nav>

                                    <!-- Banner -->
                                            <section id="banner">
                                                    <div class="inner">
                                                        <div class="logo"><span class="icon fa-diamond"></span></div>
                                                            <h2>Welcome to my website</h2>
                                                            <p>Website was made for school, but I thought I could use it for personal use aswell.</p>
                                                    </div>
                                            </section>
                            </div>

