<?php

class admin {
private $ncin,$nom,$prenom,$password;
function __construct($ncin="",$nom="",$prenom="",$password="") {

    $this->ncin=$ncin;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->password=$password;

    
}





public function getNcin(){
	return $this->ncin;
}


public function getNom(){
	return $this->nom;
}


public function getPrenom(){
	return $this->prenom;
}

public function getPass(){
	return $this->password;
}




public function setFirstName($nom){
        $this->nom = $nom;
    }






public function setCin($ncin){
        $this->ncin = $ncin;
    }



public function setPrenom($prenom){
        $this->prenom = $prenom;
    }


 public function setPass($password){
        $this->password = $password	;
    }









}?>