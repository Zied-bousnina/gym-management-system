<?php
require_once('../controllers/client.controller.php');
$us= new ClientController();
$us->delete($_GET['id']);
header('location:consult_client.php');
?> 