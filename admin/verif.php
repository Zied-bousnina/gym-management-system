<?php
require_once("../controllers/admin.controller.php");
$user =$_POST["user"];
$pass = $_POST["password"];

$us= new adminController();
$res = $us->verifAdmin($user, $pass);

echo $res->rowCount();






// print_r($res);
// $v = $res->rowCount() ."<br>";
// echo $v;
if ($res->rowCount()>0) {
    header("location:dashbord.html");
echo $res;


}else {


    echo "<h1>verif votre mot de pass </h1>";
    header("location:login.html");
}


?>