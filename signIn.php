<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  </head>
  <body>
    <div class="row" style="width:100vw;height:100vh;">
      <div class="m-auto">
        <form action="functions.php" method="POST">
          <?php if ($_SESSION['unknown_mail']==true):?>
            <div class="alert alert-danger" role="alert">
              L'adresse e-mail nous est inconnue !
            </div>
          <?php endif;?>
          <?php if ($_SESSION['incorect_password']==true):?>
            <div class="alert alert-danger" role="alert">
              Le mot de passe ne correspond pas !
            </div>
          <?php endif;?>
          <div class="form-group">
            <label for="exampleInputEmail1">Adresse Mail</label>
            <input type="email" name="mail" required="required" class="form-control" aria-describedby="emailHelp" placeholder="Entrer mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" required="required" name="password" class="form-control" placeholder="Mot de passe">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label mb-3" for="exampleCheck1">Se souvenir de moi</label>
          </div>
          <button type="submit" name="signIn" class="btn btn-primary">Se connecter</button>
        </form>
      <div>
    </div>
  </body>
</html>
