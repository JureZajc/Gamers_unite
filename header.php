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
                    <title>2 Za ples</title>
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
                                                            <a href="#menu">Meni</a>
                                                    </nav>
                                            </header>

                                    <!-- Menu -->
                                            <nav id="menu">
                                                    <div class="inner">
                                                            <h2>Meni</h2>
                                                            <?php
                                                                if ($_SESSION) {
                                                                    echo '<li><a href="index.php">Domov</a></li>';
                                                                    echo '<li><a href="games.php">Plesi</a></li>';
                                                                    
                                                                    echo '<li><a href ="add_game.php">Dodaj nov ples </a></li>';
                                                                    echo '<li><a href ="edit_profile.php">Uredi profil </a></li>';
                                                                    echo '<li><a href ="make_admin.php">Dodaj skrbnika </a></li>';
                                                                    echo '<li><a href="./logout.php"> Odjava</a></li>';
                                                                }
                                                                else {
                                                                    echo '<li><a href="./login.php">Prijava</a></li>';
                                                                    echo '<li><a href="./add_user.php">Registracija</a></li>';
                                                                }
                                                                ?>
                                                            <a href="#" class="close">Zapri</a>
                                                    </div>
                                            </nav>

                                    <!-- Banner -->
                                            <section id="banner">
                                                    <div class="inner">
                                                        <div class="logo"><span class="icon fa-diamond"></span></div>
                                                            <h2>Pozdravljeni na naši spletni strani</h2>
                                                            <p>Na naši spletni strani lahko najdete novega plesnega partnerja</p>
                                                    </div>
                                            </section>
                            </div>

