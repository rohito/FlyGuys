<?php
header('Conten-Type: application/json');
require_once("Flight.php");
require_once("dataAccess-db.php");

if(!isset($_REQUEST["origin"])){
  echo json_encode([]);
}
else{
  $flights =  getFlightsByOrigin($_REQUEST["origin"]);
  echo json_encode($flights);
}
?>
