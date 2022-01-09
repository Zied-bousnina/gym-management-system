<?php
require_once('../controllers/client.controller.php');
require_once('../models/client.php');
$firstName = $_POST['firstName'];
$lastName = $_POST['LastName'];
$adresse = $_POST['adresse'];
$tel = $_POST['Tel'];
$type = $_POST['type'];

$us= new client($type,$firstName,$lastName,$tel,$adresse);
$usCont = new ClientController();
$usCont->insert($us);



header("location:dashbord.html");
?>