<?php
require_once('../controllers/seance.controller.php');
require_once('../models/seance.php');

$id = $_POST['id'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$allDate = $date .''.$time;
echo $id;
echo'<br>';
echo $type;
echo'<br>';



echo $allDate;

// $us = new seance( );
$usCon = new seanceController();
$usCon->insert($id,$type, strval($allDate));

header('location:dashbord.html');


?>