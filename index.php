<?php
	require_once('functions.php');
	$categories = getCategories();
	$projects = getProjects();
?>

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
        <img src="images/logo.png" alt="">
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
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="about.html">À propos de nous</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="col-md-4 full-contact">
                <ul>
                    <li class="title">Get in Touch</li>
                    <li>hi@gorge.com</li>
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
            </div>
        </div>
    </div>

    <!-- SITE CONTENT -->
    <div class="wrapper">
        <section class="home">
            <div id="particles-js"></div>
            <div class="home-content">
                <h1 class="hero-title">Thierry<br><span>et Simon</span></h1>
                <p class="top_45">Nous sommes web-designer et developpeur web sur Bordeaux.<br> Nos compétences: <span class="element" data-text1="React" data-text2="Php" data-text3="Adobe Xd" data-loop="true" data-backdelay="1500"></span></p>
                <div class="social">
                    <a class="text">social links</a>
                    <div class="line"></div>
                    <a href="#"><i class="fab fa-facebook"></i>  </a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                    <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                </div>
            </div>
        </section>

        <div class="cont">
            <section id="portfolio" class="portfolio">
                    <div class="portfolio-filter row">
											<?php foreach ( $categories as $category ): ?>
                        <div data-filter=".digital" class="cbp-filter-item"><?= $category->category_name ?></div>
											<?php endforeach ?>
											<div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All Works</div>
                    </div>
                    <div id="grid-container">
                        <!-- Item -->

												<?php foreach ( $projects as $project ): ?>
	                        <div class="cbp-item <?= $project->project_category?>">
	                            <a href="show_project.php?id=<?= $project->project_id?>">
	                                <figure class="fig">
	                                    <img src="<?= $project->project_image?>" alt="">
	                                    <figcaption>
	                                        <h3><?= $project->project_title?></h3>
	                                        <p><?= $project->project_category?></p>
	                                    </figcaption>
	                                </figure>
	                            </a>
	                        </div>
												<?php endforeach ?>
											</div>
                    <!-- load more button -->
                    <div id="port-loadMore" class="cbp-l-loadMore-button top_120 bottom_90">
                        <a href="port.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">2</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">Loading...</span>
                            <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                        </a>
                    </div>
            </section>

            <hr class="top_90 bottom_90 col-md-8">

            <section class="widget-twitter top_60">
                 <div class="widget-title">
                    <h2 class="classic-title">Latest Tweets</h2>
                </div>
                <div class="tweet"><ul><li class="item">12312</li></ul></div>
                <a href="https://twitter.com/envato" target="_blank" class="twitter-account">@envato</a>
            </section>
        </div> <!-- cont end -->
    </div> <!-- wrapper end -->

    <footer>
       <div class="cont">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 copyright">
                    <img src="images/logo.png" alt="">
                    <p>© 2018 Gorge Creative Agency</p>
                </div>
                <div class="col-md-4 d-sm-none d-md-block">
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i>  </a>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                    <a href="#">
                        <strong>Get In Touch</strong><br>
                        <p>hi@gergedigital.co</p>
                    </a>
                </div>
            </div>
       </div>
    </footer>


<?php
	// NE marche pas quand j'appelle mes scripts dans le scripts.php
	include('scripts.php')
?>
<!-- Javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="js/typed.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.hover3d.js"></script>
<script src="twitter-api/tweetie.js"></script>
<script src="js/main.js"></script>

</body>
</html>
