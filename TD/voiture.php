
<?php
class Voiture {

 private $marque;
 private $couleur;
 private $immatriculation;

function setCouleur($couleur) {
    $this->couleur=$couleur;
}

function getCouleur() {
    return $this->couleur;
}

function setMarque($marque) {
    $this->marque=$marque;
}

function getMarque() {
    return $this->marque;
}

function setImmatriculation($immatriculation) {
    $this->immatriculation=$immatriculation;
}

function getImmat() {
    return $this->immatriculation;
}

 // une methode d'affichage.
 public function afficher() {
 
    $voiture=
    [
        'marque'=>$this->marque,
        'couleur'=>$this->couleur,
        'immatriculation'=>$this->immatriculation
    ];
    return $voiture;
 }
}
?>