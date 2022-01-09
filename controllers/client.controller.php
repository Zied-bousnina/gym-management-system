<?php
include_once('../models/client.php') ;
include_once('../database/config.php');
class ClientController extends Modele{
function __construct() {
parent::__construct();
}

function insert(Client $c){

$query="insert into client(nom,prenom,tel,adresse,typeS)values(?, ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$array =array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getadresse(), $c->gettypeS()) ;
// var_dump($array);
$res->execute($array);
return $res ;

}

function getClient($id){
    $query="SELECT * FROM client WHERE idClient = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idClient) {
$query = "delete from client where id=?";
$res=$this->pdo->prepare($query);
$res->execute(array($idClient));
return $res ;
}
function liste(){
$query = "select * from client";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(Client $c, $id)
{
$sql = "UPDATE client SET  nom=?, prenom=?,tel=?, adresse=?,typeS=? WHERE id=?";
$stmt= $this->pdo->prepare($sql);
return $stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getadresse(), $c->gettypeS(),$id));
}


}

?>


