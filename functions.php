<?php
require('connect.php');

// ====================================================================================================
//                                       Redirections to functions
// ====================================================================================================

//------------- Articles -------------

if(isset($_POST['edit_projet_submit']))
{
   editaProject();
   header('Location:index.php');
}

if(isset($_POST['create_project']))
{
    createProject();
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

function getaProject($id_project){

    require('connect.php');

    $query_article = "SELECT * FROM projets WHERE project_id=(:id_project)";
    $query = $bdPdo->prepare($query_article);
    $query->execute(array(
        ':id_project' => $id_project
    ));
    $article = $query->fetch();

return $article;

}

function editaProject(){
    require('connect.php');

    $project = getaProject($_GET['id_projet']);
    $query_edit = $bdPdo->prepare('UPDATE projets SET project_title = :title, project_description = :description, project_image = :image, project_category = :category, project_link = :link,  project_date = :date_project  WHERE id=(:project_id)');
    $query_edit->execute(array(

        ':project_id' => $_GET['id_projet'],
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':category' => $_POST['category'],
        ':link' => $_POST['link'],
        ':date_project' => date("Y-m-d",strtotime($_POST['date']))
    ));
}


function createProject(){

  require('connect.php');

  $query_create = $bdPdo->prepare('INSERT INTO projets(project_title, project_description, project_image, project_date, project_category, project_link) VALUES(:title, :description, :image, :date_project, :category, :link)');

    $query_create->execute(array(
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':category' => $_POST['category'],
        ':link' => $_POST['link'],
        ':date_project' => date("Y-m-d",strtotime($_POST['date']))
    ));

    $query_create->closeCursor();

}
?>
