<?php

class client {
private $typeS,$nom,$prenom,$telephone, $adresse;
function __construct($typeS="",$nom="",$prenom="",$telephone="", $adresse) {

    $this->typeS=$typeS;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->telephone=$telephone;
    $this->adresse = $adresse;

}





public function gettypeS(){
	return $this->typeS;
}


public function getNom(){
	return $this->nom;
}
public function getadresse(){
	return $this->adresse;
}


public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->telephone;
}




public function setFirstName($nom){
        $this->nom = $nom;
    }






public function settype($typeS){
        $this->typeS = $typeS;
    }



public function setPrenom($prenom){
        $this->prenom = $prenom;
    }


 public function setTel($telephone){
        $this->telephone = $telephone	;
    }


 public function setadresse($adresse){
    $this->adresse = $adresse	;
}









}?>