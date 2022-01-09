<?php
include_once('../models/machine.php') ;
include_once('../database/config.php');
class machineController extends Modele{
function __construct() {
parent::__construct();
}

function insert($num,$nom,$dateIns){

$query="insert into machine values(?, ?, ?)";
$res=$this->pdo->prepare($query);

$array =array($num,$nom,$dateIns) ;
$res->execute($array);
return  $res;

}







}

?>


