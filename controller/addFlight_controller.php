<?php
session_start();
require_once("Flight.php");
require_once("dataAccess-db.php");

$status = false;

if(isset($_REQUEST["flight"])){
  $flightId=$_REQUEST["flightID"];
  $origin=$_REQUEST["origin"];
  $destination=$_REQUEST["destination"];
  $departureD=$_REQUEST["departureD"];
  $departureDay=$_REQUEST["departureDay"];
  $departureT=$_REQUEST["departureT"];
  $duration=$_REQUEST["duration"];

  $flight = new Flight();
  $flight->$flightId = htmlentities($flightId);
  $flight->$origin= htmlentities($origin);
  $flight->$destination= htmlentities($destination);
  $flight->$departureD= htmlentities($departureD);
  $flight->$departureDay= htmlentities($departureDay);
  $flight->$departureT= htmlentities($departureT);
  $flight->$duration= htmlentities($duration);

  addFlight($flight);
  $status = "$flight has been added.";
}
// TO DO link to admin page 
header("");
?>
