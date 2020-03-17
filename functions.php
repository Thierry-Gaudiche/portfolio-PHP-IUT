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

function createProject(){

    require('connect.php');

    $query_create = $bdPdo->prepare('INSERT INTO projects(project_title, project_description, project_image, project_date, project_category) VALUES(:title, :description, :image, :date_project, :category)');

    $query_create->execute(array(
        ':titre' => $_POST['title'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':category' => $_POST['category'],
        ':date' => $_POST['date'],
    ));

    $query_create->closeCursor();

}
?>
