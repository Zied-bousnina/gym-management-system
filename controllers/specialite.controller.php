<?php
include_once('../models/specialite.php') ;
include_once('../database/config.php');
class specialiteController extends Modele{
function __construct() {
parent::__construct();
}

function insert(specialite $c){

$query="insert into specialite(ncin,nom,prenom,telephone)values(?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array() ;
$res->execute($aryy);
return $res;

}

function getspecialite($id){
    $query="SELECT * FROM specialite WHERE idspecialite = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idspecialite) {
$query = "delete from specialite where idspecialite=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idspecialite));
}
function liste(){
$query = "select * from specialite";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}



}

?>


