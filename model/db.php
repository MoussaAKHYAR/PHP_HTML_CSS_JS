<?php

function getConnexion()
{
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "banquepeuple";

  $dsn = "mysql:host=$host;dbname=$dbname";

  try {
    $db = new PDO($dsn,$user,$password);
  } catch (PDOException $ex) {
    die('Error : '.$ex->getMessage());
  }
  return $db;
}
function codeAleatoire($car)
{
  $string = "";
  $chaine = "2643789ABDCEFGHJKMNPRTUVW";
  srand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++)
  {
      $string .= $chaine[rand()%strlen($chaine)];
  }
  return $string;
}
?>