<?php

class machine {
private $nSerie,$nom, $dateIns;
function __construct($nSerie="",$nom="", $dateIns="") {

    $this->nSerie=$nSerie;

    $this->nom=$nom;
    $this->dateIns = $dateIns;


}





public function getnSerie(){
	return $this->nSerie;
}


public function getDate() {
    return $this->dateIns;
}




public function getnom(){
	return $this->nom;
}

public function setDate ($date) {
    $this->dateIns = $date;
}

public function setNserie($nSerie){
        $this->nSerie = $nSerie;
    }



public function setnom($nom){
        $this->nom = $nom;
    }


}
?>