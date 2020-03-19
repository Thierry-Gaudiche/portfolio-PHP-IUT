<?php

session_start();
require('connect.php');

// ====================================================================================================
//                                       Redirections to functions
// ====================================================================================================

//------------- Projects -------------

if(isset($_POST['edit_projet_submit'])) // execution de la fonction edit lorsque le bouton modifier de la page edit a été pressé
{
   editaProject();
   header('Location:index.php');
}

if(isset($_POST['create_project'])) // execution de la fonction create lorsque le bouton create de la page create a été pressé
{
    createProject();
    header('Location:index.php');
}

if(isset($_GET['id_project_del'])) // execution de la fonction delete lorsque le bouton delete de la page show a été pressé
{
    deleteProject();
    header('Location:index.php');
}

//------------- Accounts -------------

if(isset($_POST['signIn']))
{
   loginAdmin();
}

if(isset($_POST['signUp']))
{
    signUpAdmin();
    header("index.php");
}

if(isset($_GET['logout_admin']))
{
    logoutAdmin();
}

// ====================================================================================================
//                                               Projects
// ====================================================================================================

// fonction de récupération des projets
function getProjects(){
    require('connect.php');
    $query_project = "SELECT * FROM projets";
    $query = $bdPdo->prepare($query_project);
    $query->execute();
    $project = $query->fetchALL(PDO::FETCH_OBJ);

return $project;
}

// fonction qui récupere un projet avec une id donné
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

// fonction qui modifie le projet (on récupère les données des champs pour remplacer celles existantes dans la DB)
function editaProject(){
    require('connect.php');

    $query_edit = $bdPdo->prepare('UPDATE projets SET project_title = :title, project_description = :description, project_image = :image, project_category = :category, project_link = :link,  project_date = :date_project  WHERE project_id=(:project_id)');
    $query_edit->execute(array(

        ':project_id' => $_GET['id_projet'],
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':image' => $_POST['image'],
        ':category' => $_POST['category'],
        ':link' => $_POST['category'],
        ':date_project' => date("Y-m-d",strtotime($_POST['date']))
    ));
}

// fonction qui créé ue projet (on récupère les données des champs pour les placer dans la table project de la DB)
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

// fonction qui suprime le projet
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

// fonction qui récupere les différentes catégories de la db
function getCategories(){
    require('connect.php');
    $query_categories = "SELECT * FROM categories";
    $query = $bdPdo->prepare($query_categories);
    $query->execute();
    $categories = $query->fetchALL(PDO::FETCH_OBJ);

return $categories;
}

// fonction qui récupere la catégorie associé à un projet
function getCategoryOfAProject($id_category){
  require('connect.php');

  $query_category = "SELECT * FROM categories WHERE category_id=(:id_category)";
  $query = $bdPdo->prepare($query_category);
  $query->execute(array(
      ':id_category' => $id_category
  ));
  $category = $query->fetch();

return $category;
}

// ====================================================================================================
//                                               Users
// ====================================================================================================

function getUsers(){
    require('connect.php');
    $query_user = "SELECT * FROM users";
    $query = $bdPdo->prepare($query_user);
    $query->execute();
    $user = $query->fetchALL(PDO::FETCH_OBJ);

return $user;
}

function getaUser($id_user){

    require('connect.php');

    $query_project = "SELECT * FROM users WHERE user_id=(:id_user)";
    $query = $bdPdo->prepare($query_user);
    $query->execute(array(
        ':id_user' => $id_user
    ));
    $user = $query->fetch();

return $user;

}

function   loginAdmin(){

	require('connect.php');

  $password = md5($_POST['password']); //Cryptage du mot de passe

	$count = $bdPdo->prepare("SELECT COUNT(*) AS pseudoexist FROM users WHERE user_mail=?");
    $count->execute(array($_POST['mail']));
    $req  = $count->fetch(PDO::FETCH_ASSOC);
    $count->closeCursor();
    if($req['pseudoexist']==0) {
        $_SESSION['unknown_mail']=true;
        //header('Location:signIn.php');
    }

    else {
        $_SESSION['unknown_mail']=false;
        $testmdp=$bdPdo->prepare("SELECT * FROM users WHERE user_mail=?");
        $testmdp->execute(array($_POST['mail']));
        $req_2  = $testmdp->fetch(PDO::FETCH_ASSOC);
        $testmdp->closeCursor();

        if ($req_2['user_password']==$password) {
            $_SESSION['current_user_id']=$req_2['user_id'];
            $_SESSION['current_user_nom']=$req_2['user_firstname'];
            $_SESSION['incorect_password']=false;
            //header('Location:index.php');
        }
        else {
            $_SESSION['incorect_password']=true;
            //header('Location:signIn.php');
        }
    }

}

function logoutAdmin(){
    session_destroy();
    header('Location:index.php');

}

function signUpAdmin(){

  require('connect.php');

  if ($_POST['password']==$_POST['password_confirm']) { //verification de la confirmation

    $password = md5($_POST['password']); //Cryptage du mot de passe

    $query_create = $bdPdo->prepare('INSERT INTO users(user_lastname, user_firstname, user_description, user_cvlink, user_image, user_password, user_mail) VALUES(:lastname, :firstname, :description, :cv_link, :user_image, :password, :mail)');

      $query_create->execute(array(
          ':mail' => $_POST['email'],
          ':password' => $password,
          ':firstname' => $_POST['firstname'],
          ':lastname' => $_POST['lastname'],
          ':description' => $_POST['description'],
          ':cv_link' => NULL,
          ':user_image' => NULL
      ));

      $query_create->closeCursor();
      $_SESSION['passwords_not_same']=false;
      header('Location:index.php');
  }
  else {
    $_SESSION['passwords_not_same']=true;
    header('Location:signUp.php');
  }


}
?>
