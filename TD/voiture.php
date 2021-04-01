<?php
class Voiture {

    public $Couleur;
    public $Marque;
    public $Immat;   
   
    function setCouleur($Couleur) {
        $this->Couleur=$Couleur;
    }
    function getCouleur() {
        return $Couleur;
    }
       
    function setMarque($Marque) {
        $this->Marque=$Marque;
    }
    function getMarque() {
        return $Marque;
    }

    function setImmat($Immat) {
        $this->Immat=$Immat;
    }
    function getImmat() {
        return $Immat;
    }
}
?>