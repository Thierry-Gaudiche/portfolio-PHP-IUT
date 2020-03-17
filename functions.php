<?php
require('connect.php');

function getProjects(){
    require('connect.php');
    $query_project = "SELECT * FROM projets";
    $query = $bdPdo->prepare($query_project);
    $query->execute();
    $project = $query->fetchALL(PDO::FETCH_OBJ);

return $project;
} ?>
