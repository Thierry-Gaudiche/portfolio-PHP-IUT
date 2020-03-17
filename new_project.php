<?php
	require_once('functions.php');
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
		    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
			<div class="form-group">
		    <label for="image">Nom du fichier image (avec l'extension)</label>
		    <input class="form-control" name="image" placeholder="projet1.jpg">
		  </div>
			<div class="form-group row">
			  <label for="example-date-input" class="col-2 col-form-label">Date</label>
			  <div class="col-10">
			    <input class="form-control" type="date" name="date" value="2011-08-19" >
			  </div>
			</div>
		  <div class="form-group">
		    <label for="category">Catégorie</label>
		    <select name="category" class="form-control" id="exampleFormControlSelect1">
		      <option>Web Design</option>
		      <option>Developpement Web</option>
		      <option>Branding</option>
		    </select>
		  </div>
			<div class="form-group">
		    <input type="submit" class="btn btn-primary" value="Créer le projet" name="create_project">
		  </div>
		</form>
		<?php include('scripts.php') ?>
	</body>
</html>
