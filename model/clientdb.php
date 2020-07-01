<?php
require_once 'db.php';

function addClientPhysique($matricule,$cni,$nom,$prenom,$sexe,$dateNaiss,$telephone,$adrPersonne,$email){
  $sql = "INSERT INTO personne VALUES('$matricule','$cni','$nom','$prenom','$sexe','$dateNaiss','$telephone','$adrPersonne','$email',null,null)";

  $conn = getConnexion();
  return $conn->exec($sql);
}

function addClientEntreprise($nomE,$telephone,$email,$login,$password,$adrEntreprise){
  $sql = "INSERT INTO entreprise VALUES(NULL,'$nomE','$telephone','$email','$login','$password','$adrEntreprise')";

  $conn = getConnexion();

  $conn->exec($sql);

  return $conn->lastInsertId();
}

function getAllClientEntreprise(){

  $sql = "SELECT * FROM entreprise";

  $conn = getConnexion();

  return $conn->query($sql);

}
?>