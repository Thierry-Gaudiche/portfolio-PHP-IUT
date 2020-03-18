<?php
	require_once('functions.php');
	if (!isset($_SESSION['current_user_id'])){
		header('Location:index.php');
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<form action="functions.php" method="POST">
		  <div class="form-group">
		    <label for="title">Titre du projet</label>
		    <input class="form-control" name="title" placeholder="Titre">
		  </div>
			<div class="form-group">
		    <label for="description">Description</label>
		    <textarea class="form-control" name="description" rows="3"></textarea>
		  </div>
			<div class="form-group">
		    <label for="image">Nom du fichier image (avec l'extension)</label>
		    <input class="form-control" name="image" placeholder="projet1.jpg">
		  </div>
			<div class="form-group">
		    <label for="title">Lien du projet</label>
		    <input class="form-control" name="link" placeholder="URL du projet">
		  </div>
			<div class="form-group row">
			  <label for="example-date-input" class="col-2 col-form-label">Date</label>
			  <div class="col-10">
			    <input class="form-control" type="date" name="date" value="2011-08-19" >
			  </div>
			</div>
		  <div class="form-group">
		    <label for="category">Catégorie</label>
		    <select name="category" class="form-control">
		      <option value="Web Design" selected="selected">Web Design</option>
		      <option value="Developpement Web">Developpement Web</option>
		      <option value="Branding">Branding</option>
		    </select>
		  </div>
			<div class="form-group">
		    <input type="submit" class="btn btn-primary" value="Créer le projet" name="create_project">
		  </div>
		</form>
		<?php include('scripts.php') ?>
	</body>
</html>
