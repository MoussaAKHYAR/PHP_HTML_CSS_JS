<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="page de connexion dans une application bancaire">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="public/css/stylelogin.css">
</head>
<body>
  <h1 class="title">Banque du peuple</h1>
  <div class="loginbox">
    <img src="public/img/login.png" alt="login" class="avatar">
    <h1>Connectez vous !</h1>
    <form action="loginController.php" method="post" name="connexion" id="connexion" >
      <div>
        <p>Nom d'utilisateur</p>
        <input type="text" name="nomUtilisateur" id="nomUtilisateur" onclick ="saisie('utilisateur',this.id)" onmouseout="retablir('utilisateur',this.id)" onblur="mev('utilisateur',this.id)"/>
      </div>
      <div>
        <p>Mot de passe</p>
        <input type="password" name="password" id="password" onclick ="saisie('password', this.id)" onmouseout="retablir('password',this.id)" onblur="mev('password',this.id)"/>
      </div>
      <div class="btn">
        <input type="button" value="Connecter" onclick="envoyer()"  />
      </div>
      <a href="#">Mot de passe oublié ?</a><br>
      <a href="#">Vous n'avez pas de compte</a>
    </form>
  </div>
<script type="text/javascript" src="public/js/loginjs.js"></script>
</body>
</html>