<?php
require_once 'db.php';

function addEmploye($cin,$nom,$prenom,$email,$username,$password,$tel,$adresse)
{
  $adresse = null;
  $sql = "INSERT INTO employe VALUES(NULL,'$cin','$nom','$prenom','$email','$username','$password','$tel',$adresse)";

  $conn = getConnexion();

  return $conn->exec($sql);
}

function login($username,$password){

  $sql = "SELECT * FROM personne
            WHERE login = '$username'
            AND password = '$password'";
    $db = getConnexion();

    $result = $db->query($sql);
    return $result;

}

?>