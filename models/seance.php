<?php

class seance {
private $type,$id_coach,$temp;
function __construct($type="",$id_coach="",$temp="") {


    $this->type=$type;
    $this->id_coach=$id_coach;
    $this->temp=$temp;

}







public function gettype(){
	return $this->type;
}


public function getid_coach(){
	return $this->id_coach;
}

public function gettemp(){
	return $this->temp;
}




public function setType($type){
        $this->type = $type;
    }









public function setid_coach($id_coach){
        $this->id_coach = $id_coach;
    }


 public function settemp($temp){
        $this->temp = $temp	;
    }









}?>