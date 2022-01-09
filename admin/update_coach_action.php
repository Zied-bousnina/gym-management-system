<?php
require_once('../controllers/coach.controller.php');
require_once('../models/coach.php');



    $cin = $_POST['cin'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $Tel = $_POST['Tel'];



    // $us= new coach($cin, $nom, $type);
    $usCont = new CoachController();

    $usCont->modifier_user($cin, $name, $type, $Tel);


header("location:consult_coach.php");


?>