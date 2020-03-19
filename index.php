<?php
	require_once('functions.php');
	$categories = getCategories();
	$projects = getProjects();

	include('header.php');
?>
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
                        <div data-filter=".<?= $category->category_name ?>" class="cbp-filter-item"><?= $category->category_name ?></div>
											<?php endforeach ?>
											<div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All Works</div>
                    </div>
                    <div id="grid-container">

                        <!-- Boucle foreach pour afficher les projets implémentés dans la base de données -->
												<?php foreach ( $projects as $project ): ?>
	                        <div class="cbp-item <?= getCategoryOfAProject($project->project_category)['category_name']?>">
	                            <a href="show_project.php?id=<?= $project->project_id?>"><!-- On récupere l'id du projet -->
	                                <figure class="fig">
	                                    <img src="<?= $project->project_image?>" alt=""><!-- On récupere l'image du projet -->
	                                    <figcaption>
	                                        <h3><?= $project->project_title?></h3><!-- On récupere le titre du projet -->
	                                        <p><?= $project->project_category?></p><!-- On récupere la catégorie du projet -->
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
						<section class="row">
							<div class="col-md-12" style="text-align: center;" id="chuck">
								<p class="mb-4" style="font-weight:bold;" >Parce que pour nous la sagesse est primordiale, voici des faits aléatoires sur Chuck Norris:</p>
							</div>
							<div class="col-md-12 d-flex">
								<img class="m-auto" style="width:150px;" src="./assets/chuck.gif"/>
							<div>
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
<script src="js/chuckNorrisAPI.js"></script>
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
