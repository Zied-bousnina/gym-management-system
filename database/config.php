<?php
abstract class Modele {
protected $pdo;
function __construct()
{
$this->pdo =new PDO('mysql:host=localhost;dbname=gym','root','');
}
function __destruct()
{
$this->pdo=null;
}



}
?>