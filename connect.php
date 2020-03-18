<?php

ini_set('display_errors','on');
ini_set('display_startup_errors','on');
error_reporting(E_ALL);

// Connexion et choix de la base de données
$server = 'mysql:host=localhost;dbname=thierry_simon';
$user = 'root';
$password = '';


try {
	$bdPdo = new PDO($server, $user, $password);
}
catch (PDOException $e){
	echo 'Problème de connexion : ' . $e->getMessage();

}

$utf8 = 'SET NAMES UTF8';
$bdPdo->query($utf8);

?>
