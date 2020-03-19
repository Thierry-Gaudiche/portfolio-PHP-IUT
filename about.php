<?php
	require_once('functions.php');
	$users = getUsers();

  include('header.php');
?>
    <!-- SITE CONTENT -->
    <div class="wrapper">
        <section class="titlebar">
            <h1 class="page-title"><span>About </span>us</h1>
            <div id="particles-js"></div>
        </section>

        <hr class="col-md-6 bottom_60">

        <div class="cont">
            <section class="about">
                <!-- ABOUT TEXT -->
								<?php foreach ( $users as $user ): ?>
                <div class="about-text text-center top_90">
										<h2><?= $user->user_firstname?><h2>
                    <p class="subtitle"><?= $user->user_description	?></p><br>
                </div>
								<?php endforeach ?>
						</section>
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
