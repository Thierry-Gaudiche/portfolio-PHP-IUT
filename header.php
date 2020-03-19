<!DOCTYPE html>
<html lang="fr">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="description" content="Gorge Portfolio Template">
	<meta name="keywords" content="personal, portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="cubeportfolio/css/cubeportfolio.min.css"/>
  <link rel="stylesheet" href="css/colors/red.css"/>
	<link rel="stylesheet" href="css/style.css"/>

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>

</head>
<body>
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    <!-- HEADER -->
    <header>
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- FULL MENU -->
    <div class="full-menu">
        <div class="full-inner row">
            <nav class="col-md-8">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos de nous</a></li>
                    <li><a href="contact.php">Contact</a></li>
										<?php
										if (isset($_SESSION['current_user_id'])) :?>
											<li><a href="new_project.php">ajouter un projet</a></li>
										<?php endif; ?>

                </ul>
            </nav>
            <div class="col-md-4 full-contact">
                <ul>
										<li class="title">Get in Touch</li>
										<?php
										if (isset($_SESSION['current_user_id'])) :?>
											<li>hi <?= $_SESSION['current_user_nom']?></li>
										<?php endif; ?>
										<?php
										if (isset($_SESSION['current_user_id'])) :?>
											<li><a href="functions.php?logout_admin">Se deconnecter</a></li>
										<?php else : ?>
											<li><a href="signUp.php">S'inscrire</a></li>
											<li><a href="signIn.php">Se connecter</a></li>
										<?php endif; ?>
                    <li>
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook"></i>  </a>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                        </div>
                    </li>
                </ul>
								<?php if (!isset($_SESSION['current_user_id'])) :?>
									<div class="" style="position:fixed;bottom:0;right:0;">
										<a href="signUp.php"><img style="width:30px;" src="./assets/bubule.png" /></a>
									</div>
								<?php endif; ?>
            </div>
        </div>
    </div>
