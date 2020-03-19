<!DOCTYPE html>
<?php
require_once('functions.php');
if (!isset($_SESSION['current_user_id'])){
  header('Location:index.php');
}
$project=getaProject($_GET["id"]);
?>
<html>

<head>
    <meta charset="utf-8">
    <title>edit des projets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

  <body>

    <div class="container main-content col-lg-5">
        <h2> Modifier un projet</h2>
        <form action=<?= "functions.php?id_projet=".$_GET["id"] ?> method="POST"><!-- On récupere l'id du projet à modifier -->

        <div class="form-group">
            <label for="title" Titre </label><br/>
            <input type="text" class="form-control" name="title" value=<?= $project['project_title'] ?> ><!-- On récupere le titre du projet à modifier et on rempli le champ avec-->
        </div>

        <div class="form-group">
            <label for="description"> description </label><br/>
            <textarea name="description" cols="110" rows="5" class="form-control"><?= $project['project_description'] ?></textarea><!-- On récupere la description du projet à modifier et on rempli le champ avec-->
        </div>

				<div class="form-group">
					<label for="title">Lien du projet</label>
					<input class="form-control" name="link" placeholder="URL du projet"> <!-- On récupere le lien du projet à modifier et on rempli le champ avec-->
				</div>

        <div class="form-group">
            <label for="image"> Image </label><br/>
            <div class="dropzone">
                <div class="info"></div>
            </div>
            <script type="text/javascript" src="js/imgur.js"></script>
            <script type="text/javascript" src="js/upload.js"></script> <!-- On récupere l'image du projet à modifier et on rempli le champ avec-->            
        </div>

				<div class="form-group">
				  <label for="example-date-input" class="col-2 col-form-label">Date</label>
				  <input class="form-control" type="date" name="date" value="<?= $project['project_date'] ?>" ><!-- On récupere la date du projet à modifier et on rempli le champ avec-->
				</div>

				<div class="form-group">
			    <label for="category">Catégorie</label>
			    <select name="category" class="form-control">
			      <option value="Web Design" selected="selected">Web Design</option>
			      <option value="Developpement Web">Developpement Web</option>
			      <option value="Branding">Branding</option>
			    </select>
			  </div>

				<input type="submit" value="modifier le projet" class="btn btn-primary mb-2" name="edit_projet_submit"> <!-- bouton pour appeler la fonction edit et envoiyer les nouvelles données-->

        	</form>

    </div>

</body>

</html>
