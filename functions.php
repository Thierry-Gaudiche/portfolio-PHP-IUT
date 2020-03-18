<?php
require('connect.php');

// ====================================================================================================
//                                       Redirections to functions
// ====================================================================================================

//------------- Articles -------------

if(isset($_POST['create_project']))
{
    createProject();
    header('Location:index.php');
}

if(isset($_POST['update_project']))
{
    updateProject();
    header('Location:index.php');
}

if(isset($_GET['id_project_del']))
{
    deleteProject();
    header('Location:index.php');
}


// ====================================================================================================
//                                               Projects
// ====================================================================================================

function getProjects(){
    require('connect.php');
    $query_project = "SELECT * FROM projets";
    $query = $bdPdo->prepare($query_project);
    $query->execute();
    $project = $query->fetchALL(PDO::FETCH_OBJ);

return $project;
}

function createProject(){

  require('connect.php');

  $date=date("Y-m-d",strtotime($_POST['date']));
  $query_create = $bdPdo->prepare('INSERT INTO projets(project_title, project_description, project_image, project_date, project_category) VALUES(:title, :description, :image, :date_project, :category)');

    $query_create->execute(array(
        ':titre' => $_POST['title'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':category' => $_POST['category'],
        ':date' => $date
    ));

    $query_create->closeCursor();

}

function updateProject(){

  require('connect.php');

  $date=date("Y-m-d",strtotime($_POST['date']));
  $query_update = $bdPdo->prepare('UPDATE projets SET project_title = :titre, project_image = :image, project_description = :description, project_date = :date_project, project_category = :category WHERE id=(:id)');

    $query_update->execute(array(
        ':titre' => $_POST['title'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':category' => $_POST['category'],
        ':date' => $date
    ));

    $query_update->closeCursor();

}
?>
