
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

 // un constructeur
 public function __construct($m, $c, $i) {
 $this->marque = $m;
 $this->couleur = $c;
 $this->immatriculation = $i;
 }

 // une methode d'affichage.
 public function afficher() {
 // À compléter dans le prochain exercice
 }
}
?>