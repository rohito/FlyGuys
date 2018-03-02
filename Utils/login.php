<?php
session_start();
require_once "connect.php";
$username= = ucfirst($_POST["username"]);
if(strlen($username) > 8){
    $username = explode("@",$username)[0];
}

if(isset($POST['dataName'])){
    $dataname=$_POST['dataName'];
    $_SESSION['dataName'] = $dataName;
}
?>
