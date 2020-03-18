<?php

session_start();
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

    $query_project = "SELECT * FROM projets WHERE project_id=(:id_project)";
    $query = $bdPdo->prepare($query_project);
    $query->execute(array(
        ':id_project' => $id_project
    ));
    $project = $query->fetch();

return $project;

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

function deleteProject($id_project){

    require('connect.php');

    $query_delete = $bdPdo->prepare('DELETE FROM articles WHERE id=:id ');
    $query_delete->execute(array(
        ':id' => $id_project
    ));

}
// ====================================================================================================
//                                               Categories
// ====================================================================================================

function getCategories(){
    require('connect.php');
    $query_categories = "SELECT * FROM categories";
    $query = $bdPdo->prepare($query_categories);
    $query->execute();
    $categories = $query->fetchALL(PDO::FETCH_OBJ);

return $categories;
}

// ====================================================================================================
//                                               Users
// ====================================================================================================


function loginAdmin(){

	require('connect.php');

    $password = md5($_POST['password']);

	$count = $bdPdo->prepare("SELECT COUNT(*) AS pseudoexist FROM gestionnaires WHERE mail=?");
    $count->execute(array($_POST['mail']));
    $req  = $count->fetch(PDO::FETCH_ASSOC);
    $count->closeCursor();
    if($req['pseudoexist']==0) {
        $_SESSION['state']=2;
        header('Location:login.php');
    }

    else {
        $testmdp=$bdPdo->prepare("SELECT * FROM users WHERE mail=?");
        $testmdp->execute(array($_POST['mail']));
        $req_2  = $testmdp->fetch(PDO::FETCH_ASSOC);
        $testmdp->closeCursor();

        if ($req_2['mot_passe']==$password) {
            $_SESSION['current_user_id']=$req_2['id'];
            $_SESSION['current_user_password']=$password;
            $_SESSION['current_user_nom']=$req_2['nom'];
            $_SESSION['current_user_photo']=$req_2['photo'];
            header('Location:articles.php');
        }
        else {
            header('Location:login.php');
        }
    }

}

function logoutAdmin(){
    session_destroy();
    header('Location:login.php');

}

?>
