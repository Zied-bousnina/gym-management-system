<?php
include_once('../models/seance.php') ;
include_once('../database/config.php');
class seanceController extends Modele{
function __construct() {
parent::__construct();
}

function insert($id,$type, $allDate){

$query="insert into seance (id_coach, type, temp)values(?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($id,$type, strval($allDate)) ;

$res->execute($aryy);
return $res;

}




}

?>


