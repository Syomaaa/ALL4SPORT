<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', 'root');
} catch(Exeception $e)
{
 die ('Erreur' .$e->getMessage());
}
?>



<!DOCTYPE html>  
<html lang="fr"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Espace Connexion</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="traitementconnexion.php" method='POST' class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="pseudo" placeholder="Utilisateur" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="mdp" placeholder="Mot de passe" required/>
            </div>
            <input href="accueil.html" type="submit" value="connexion" class="btn solid" />  
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
 
          <img src="img/ALL4SPORT.png" class="image" alt="" />
        </div>
     
      </div>
    </div>

    <script src="assets/js/app.js"></script>

  </body>
</html>
