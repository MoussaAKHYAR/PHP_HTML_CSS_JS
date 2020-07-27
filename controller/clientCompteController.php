<?php
require_once '../model/clientdb.php';
require_once '../model/comptedb.php';

extract($_POST);

if ($choix_client == 'nouveau') {
  if ($choix_type_client == 'physique') {
    if ($choix_compte == 'simple') {
      //$adrPersonne = 1;
      $matricule = codeAleatoire(8);
      $ok1 = addClientPhysique($matricule,$cni,$nom,$prenom,$sexe,$dateNaiss,$telephone,$adrPersonne,$email,null,null);
      $numero = codeAleatoire(8);
      $mat = $matricule;
      $rib = 1;
      $solde = 0;
      $dateOuverture = date("Y-m-d");
      $fraisOuverture = 25000;
      $remuneration = 1000;
      $salaire = 0;
      $typeCompte = 2;
      $ok2 = addCompte($numero,$mat,$rib,$solde,$dateOuverture,null,$salaire,null,null,null,null,$fraisOuverture,$remuneration,null,null,$typeCompte);
      header("location:responsable?ok=$ok2");

    }elseif($choix_compte == 'courant'){
      //$adrPersonne = 1;
      $matricule = codeAleatoire(8);
      $ok1 = addClientPhysique($matricule,$cni,$nom,$prenom,$sexe,$dateNaiss,$telephone,$adrPersonne,$email,null,null);
      $numero = codeAleatoire(8);
      $mat = $matricule;
      $rib = 1;
      $solde = 0;
      $dateOuverture = date("Y-m-d");
      $fraisOuverture = 0;
      $remuneration = 1000;
      $agios = 3000;
      $typeCompte = 1;
      $ok2 = addCompte($numero,$mat,null,$rib,$solde,$dateOuverture,$raisonSocial,$salaire,$nomEmpl,$telEmpl,$numeroIdentification,$agios,$fraisOuverture,$remuneration,null,null,$typeCompte);
      header("location:responsable?ok=$ok2");
    }else{
      //$adrPersonne = 2;
      $matricule = codeAleatoire(8);
      $ok1 = addClientPhysique($matricule,$cni,$nom,$prenom,$sexe,$dateNaiss,$telephone,$adrPersonne,$email,null,null);
      $numero = codeAleatoire(8);
      $mat = $matricule;
      $rib = 1;
      $solde = 0;
      $dateOuverture = date("Y-m-d");
      $fraisOuverture = 25000;
      $remuneration = 1000;
      $salaire = 0;
      $typeCompte = 3;
      $ok2 = addCompte($numero,$mat,null,$rib,$solde,$dateOuverture,null,$salaire,null,null,null,null,$fraisOuverture,$remuneration,$dateDebut,$dateFin,$typeCompte);
      header("location:responsable?ok=$ok2");
    }

  }else{
    if ($choix_compte == 'simple') {
      //$adrEntreprise = 1;
      $okE = addClientEntreprise($nomE,$telephone,$email,null,null,$adrEntreprise);
      $numero = codeAleatoire(8);
      $id = $okE;
      $rib = 1;
      $solde = 0;
      $dateOuverture = date("Y-m-d");
      $fraisOuverture = 25000;
      $remuneration = 1000;
      $salaire = 0;
      $typeCompte = 2;
      $ok2 = addCompteEntreprise($numero,$id,$rib,$solde,$dateOuverture,null,$salaire,null,null,null,null,$fraisOuverture,$remuneration,null,null,$typeCompte);
      header("location:responsable?ok=$ok2");

    }else{
      //$adrEntreprise = 1;
      $okE = addClientEntreprise($nomE,$telephone,$email,null,null,$adrEntreprise);
      $numero = codeAleatoire(8);
      $id = $okE;
      $rib = 1;
      $solde = 0;
      $dateOuverture = date("Y-m-d");
      $fraisOuverture = 25000;
      $remuneration = 1000;
      $salaire = 0;
      $typeCompte = 2;
      $ok2 = addCompteEntreprise($numero,$id,$rib,$solde,$dateOuverture,null,$salaire,null,null,null,null,$fraisOuverture,$remuneration,$dateDebut,$dateFin,$typeCompte);
      header("location:responsable?ok=$ok2");
    }
  }

}
else{
  

}

?>