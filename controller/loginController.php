<?php
require_once '../model/db.php';
require_once '../model/employerDB.php';
if (isset($_POST['nomUtilisateur']) && isset($_POST['password']))
{
  $email = htmlentities($_POST['nomUtilisateur']);
  $password = htmlentities($_POST['password']);

  $result = login($email,$password);

  if($result->rowCount()!=0)
    {
      session_start();
      $user = $result->fetch();
      $_SESSION['matricule'] = $user[0];
      $_SESSION['nom'] = $user[2];
      $_SESSION['prenom'] = $user[3];
      //session_start();
      header("location:responsable");
    }else{
        header("location:login?error=yes");
    }
}
if(isset($_GET['logout']))
  {
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['nom'] = "";
    //echo $_SESSION['nom'];

    header("location:login");
  }
?>