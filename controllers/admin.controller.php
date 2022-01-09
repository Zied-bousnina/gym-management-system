<?php
include_once('../models/admin.php') ;
include_once('../database/config.php');
class adminController extends Modele{

function __construct() {
   parent::__construct();

}



function verifAdmin($user, $pass){
    $query="SELECT * FROM `admin` WHERE email = ? and pass =  ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($user, $pass));
    // $array= $res->fetch();
    return $res;
}



}

?>


