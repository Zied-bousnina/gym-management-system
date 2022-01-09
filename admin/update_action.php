<?php
require_once('../controllers/client.controller.php');
require_once('../models/client.php');


if(isset($_POST['firstName'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['LastName'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['Tel'];
    $type = $_POST['type'];
    echo $_POST['id'];


    $us= new client($type,$firstName,$lastName,$tel,$adresse);
    $usCont = new ClientController();
    $usCont->modifier_user($us, (int)$_POST['id']);

}
header("location:consult_client.php");


?>