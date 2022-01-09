<?php

class specialite {
private $id,$type,$description;
function __construct($id="",$type="",$description="") {

    $this->id=$id;
    $this->type=$type;
    $this->description=$description;

}





public function getid(){
	return $this->id;
}


public function gettype(){
	return $this->type;
}


public function getdescription(){
	return $this->description;
}






public function setFirstName($type){
        $this->type = $type;
    }






public function setId($id){
        $this->id = $id;
    }



public function setdescription($description){
        $this->description = $description;
    }











}?>