<?php

class coach {
private $ncin,$nom,$specialite,$telephone;
function __construct($ncin="",$nom="",$specialite="",$telephone="") {

    $this->ncin=$ncin;
    $this->nom=$nom;
    $this->specialite=$specialite;
    $this->telephone=$telephone;

}





public function getNcin(){
	return $this->ncin;
}


public function getNom(){
	return $this->nom;
}


public function getspecialite(){
	return $this->specialite;
}

public function getTel(){
	return $this->telephone;
}




public function setFirstName($nom){
        $this->nom = $nom;
    }






public function setCin($ncin){
        $this->ncin = $ncin;
    }



public function setspecialite($specialite){
        $this->specialite = $specialite;
    }


 public function setTel($telephone){
        $this->telephone = $telephone	;
    }









}?>