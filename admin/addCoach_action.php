<?php

require_once('../controllers/coach.controller.php');
require_once('../models/coach.php');
if (isset($_POST['cin'])) {
    $cin = $_POST['cin'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $Tel = $_POST['Tel'];


    $usContr = new coachController();
    $res = $usContr->getCoach($cin);
    if ($res->rowCount() ==0) {
        $us = new coach($cin, $name, $type,$Tel);
        # code...
        $usContr->insert($us);
        echo"insertion effectue";
    }else {
        echo "coach deja exist ";
    }


}

header("location:dashbord.html")
?>