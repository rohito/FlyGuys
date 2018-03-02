<?php
$db_user = "k1553451";
$db_name = "db_k1553451";
$db_password = "poo";


$pdo = new
 PDO("mysql:host=kunet.kingston.ac.uk;dbname=$db_name",
$db_user,$db_password);

function getAllFlights(){
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM Flight');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $result;
}

function getAllCustomers(){
  global $pdo;
  $statement = $pdo->prepare('SELECT Customer ID, First name, Surname, Email FROM Customer');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS,'Customer');
  return $result;
}

function getFlightsByStartOfOrigin($partialFlightOrigin){

  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM Flight
                              WHERE origin like ?');
  $statement->execute(["$partialFlightOrigin%"]);
  $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $users;
}

function getFlightsByStartOfDestination($partialFlightDestination){
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM Flight
                              WHERE Destination like ?');
  $statement->execute(["$partialFlightDestination%"]);
  $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $users;
}

function getFlightsByOrigin($flight){
  if ($flight == " ")
  {
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM Flight
                              WHERE origin like ?');
  $statement->execute([$flight]);
  $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $users;
}


/*
function addFlight($flight)
{
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO Flight
    (Flight ID, origin, destination, departure day, departure t,duration) VALUES (?,?,?,?,?,?)');
  $statement->execute([$flight->FlightID
                      $flight->origin,
                      $flight->destination,
                      $flight->departureday,
                      $flight->departuret,
                      $flight->duration
                      ]);
}*/

?>
