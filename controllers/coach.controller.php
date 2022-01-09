<?php
include_once('../models/coach.php') ;
include_once('../database/config.php');
class coachController extends Modele{
function __construct() {
parent::__construct();
}

function insert(coach $c){

$query="insert into coach(cin,nom,tel,specialite)values(?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($c->getNcin(),$c->getNom(),$c->getTel(),$c->getspecialite()) ;
// var_dump($aryy);
$res->execute($aryy);
return $res;

}

function getCoach($cin){
    $query="SELECT * FROM coach WHERE cin = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($cin));

    return $res;
}
function delete($id) {
$query = "delete from coach where cin=?";
$res=$this->pdo->prepare($query);
$res->execute(array($id));
return $res ;
}
function liste(){
$query = "select * from coach";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user($cin, $name, $type, $Tel)
{
$sql = "UPDATE coach SET  nom=?, tel=?,specialite=? WHERE cin=?";
$stmt= $this->pdo->prepare($sql);
return $stmt->execute(array($name, $Tel, $type, $cin));
}


}

?>


