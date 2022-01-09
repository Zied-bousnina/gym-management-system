<?php
require_once('../controllers/machine.controller.php');
require_once('../models/machine.php');

if (isset($_POST['Num'])){
    $num = $_POST['Num'];
    $nom = $_POST['Nom'];
    $dateIns = $_POST['date'];

    // $us = new machine($num,$nom,$dateIns);
    $usContr = new machineController();
    $usContr->insert($num,$nom,$dateIns);

}
header("location:dashbord.html")

?>