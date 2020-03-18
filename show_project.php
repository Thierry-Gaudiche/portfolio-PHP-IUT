<?php
	require_once('functions.php');
	$project=getaProject($_GET["id"]);
	$nextProject=getaProject($_GET["id"]+1);

	include('header.php');
?>

    <!-- SITE CONTENT -->
    <div class="wrapper">

        <div class="cont">
            <section class="portfolio-single type-1 top_90">
                <figure class="hero-image">
                    <img src="../images/portfolio/work-1/01.jpg" alt="">
                </figure>
                <ul class="information">
                    <li><span>Date:</span><?= $project['project_date'] ?></li>
                    <li><span>Website:</span> dribbble.com</li>
                    <li><span>Category:</span> <?= $project['project_category'] ?></li>
                </ul>
                <h1 class="title bottom_15"><?= $project['project_title'] ?></h1>
                <p><?= $project['project_description'] ?></p>

                <div class="portfolio-lightbox top_60 row">
                    <figure class="col-md-6 bottom_30">
                        <img src="../images/portfolio/work-1/02.jpg" alt="">
                    </figure>
                    <figure class="col-md-6 bottom_30 lightbox">
                        <img src="../images/portfolio/work-1/03.jpg" alt="">
                    </figure>
                    <figure class="col-md-3">
                        <img src="../images/portfolio/work-1/04.jpg" alt="">
                    </figure>
                    <figure class="col-md-3">
                        <img src="../images/portfolio/work-1/05.jpg" alt="">
                    </figure>
                    <figure class="col-md-3">
                        <img src="../images/portfolio/work-1/06.jpg" alt="">
                    </figure>
                    <figure class="col-md-3">
                        <img src="../images/portfolio/work-1/07.jpg" alt="">
                    </figure>
                </div>

                <div class="col-md-12 portfolio-nav text-center top_90">
                    <a class="port-next" href="show_project.php?id=<?= $_GET["id"] + 1 ?>">
                        <div class="nav-title">next</div>
                        <div class="next-title"><?= $nextProject['project_title'] ?></div>
                    </a>
                </div>
								<form action= <?= "edit_project.php?id=".$_GET["id"] ?> method="POST" ><input class="btn-primary" type="submit" value="Modifier" name="edit_submit"/></form>
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

		<!-- Javascripts -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.hover3d.js"></script>
    <script src="twitter-api/tweetie.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
