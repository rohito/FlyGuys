<?php
header ('Content-Type: application/json');
require_once ("../Model/Model.php");
require_once ("../Controller/dataAccess-db.php");

if (!isset($_REQUEST["searchFlight"]))
{
  echo json_encode([]); //send empty array
}
else{
  $flights = getFlightsByStartOfOrigin($_REQUEST["searchFlight"]);
  echo json_encode($flights);
}
 ?>
