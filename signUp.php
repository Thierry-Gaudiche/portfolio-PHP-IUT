<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  </head>
  <body class="row" style="width:100vw;height:100vh;">
    <div class="m-auto col-md-5">
      <form class="form-horizontal" action='functions.php' method="POST">
        <fieldset>
          <div id="legend">
            <h1 class="">S'inscrire</h1>
          </div>

          <div class="form-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
              <input type="email" required="required" name="email" placeholder="ton adresse mail" class="form-control">
            </div>
          </div>
          <div class="row form-group">
            <!-- Password-->
            <div class="col-md-6">
              <label class="control-label" for="password">Nom</label>
              <div class="controls">
                <input type="text" required="required" name="lastname" placeholder="" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <label class="control-label"  for="password_confirm">Prénom</label>
              <div class="controls">
                <input type="text" required="required" name="firstname" placeholder="" class="form-control">
              </div>
            </div>
          </div>

          <div class="row form-group">
            <!-- Password-->
            <div class="col-md-6">
              <label class="control-label" for="password">Mot de passe</label>
              <div class="controls">
                <input type="password" required="required" name="password" placeholder="" class="form-control">
                <small class="form-text text-muted">Le mot de passe doit être d'au moins 8 caractères</small>
              </div>
            </div>
            <div class="col-md-6">
              <label class="control-label"  for="password_confirm">Mot de passe (confirmation)</label>
              <div class="controls">
                <input type="password" required="required" name="password_confirm" placeholder="" class="form-control">
                <small class="form-text text-muted">Confirmez votre mot de passe</small>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description personelle</label>
            <textarea required="required" name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <!-- Button -->
            <div class="controls">
              <button type="submit" name="signUp" class="btn btn-primary">S'inscrire</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </body>
</html>
