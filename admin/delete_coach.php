<?php
require_once('../controllers/coach.controller.php');
$us= new coachController();
$us->delete($_GET['id']);
header('location:consult_coach.php');
?>