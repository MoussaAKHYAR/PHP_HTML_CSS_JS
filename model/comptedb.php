<?php
require_once 'db.php';

// function addCompte($numero,$mat,$rib,$solde,$dateOuverture,$nomEmpl,$telEmpl,$agios,$fraisOuverture,$remuneration,$dateDebut,$dateFin,$typeCompte){
//   $sql = "INSERT INTO compte VALUES('$numero','$mat',$rib,'$solde','$dateOuverture','$nomEmpl','$telEmpl','$agios','$fraisOuverture','$remuneration','$dateDebut','$dateFin',$typeCompte)";

//   $conn = getConnexion();

//   return $conn->exec($sql);

// }
function addCompte($numero,$mat,$rib,$solde,$dateOuverture,$raisonSocial,$salaire,$nomEmpl,$telEmpl,$numeroIdentification,$agios,$fraisOuverture,$remuneration,$dateDebut,$dateFin,$typeCompte){
  $sql = "INSERT INTO compte VALUES('$numero','$mat',null,$rib,'$solde','$dateOuverture','$raisonSocial',$salaire,'$nomEmpl','$telEmpl','$numeroIdentification','$agios','$fraisOuverture','$remuneration','$dateDebut','$dateFin',$typeCompte)";

  $conn = getConnexion();

  return $conn->exec($sql);

}

function addCompteEntreprise($numero,$id,$rib,$solde,$dateOuverture,$raisonSocial,$salaire,$nomEmpl,$telEmpl,$numeroIdentification,$agios,$fraisOuverture,$remuneration,$dateDebut,$dateFin,$typeCompte){
  $sql = "INSERT INTO compte VALUES('$numero',null,$id,$rib,'$solde','$dateOuverture','$raisonSocial',$salaire,'$nomEmpl','$telEmpl','$numeroIdentification','$agios','$fraisOuverture','$remuneration','$dateDebut','$dateFin',$typeCompte)";

  $conn = getConnexion();

  return $conn->exec($sql);

}

// function addCompteSimple($numero,$mat,$rib,$solde,$dateOuverture,$fraisOuverture,$remuneration,$typeCompte)
// {
//   $sql = "INSERT INTO comptes VALUES('$numero','$mat',$rib,'$solde','$dateOuverture',$fraisOuverture,$remuneration,$typeCompte)";

//   $conn = getConnexion();

//   return $conn->exec($sql);
// }

?>