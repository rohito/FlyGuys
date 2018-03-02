<?php
$db_user = "k1553451";
$db_name = "db_k1553451";
$db_password = "poo";


$pdo = new
 PDO("mysql:host=kunet.kingston.ac.uk;dbname=$db_name",
$db_user,$db_password);

function getAllFlights(){
  global $pdo;
  $statement = $pdo->prepare('SELECT Flight Id, origin, destination, departure d,departure day, departure t,duration FROM Flight');
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

function getFlightsByOrigin($flight){
  if ($flight == " ")
  {
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT Flight ID, origin, destination, departure d,departure day, departure t,duration FROM Flight WHERE origin = ?');
  $statement->execute([$flight]);
  $flights = $statement->fetchAll(PDO::FETCH_CLASS, 'Flight');
  return $flights;
}

function getFlightsByDestination($flight){
  if($flight == ""){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT Flight ID, origin, destination, departure d,departure day, departure t,duration FROM Flight WHERE destination = ?');
  $statement->execute([$flight]);
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Flight');
  return $flights;
}

function getFlightsByDate($flight){
  if($flight == ""){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT Flight ID, origin, destination, departure d,departure day, departure t,duration FROM Flight WHERE departure d = ?');
  $statement->execute([$flight]);
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Flight');
  return $flights;
}

function getFlightsByDay($flight){
  if($flight==""){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT Flight ID, origin, destination, departure d,departure day, departure t,duration FROM Flight WHERE departure day = ?');
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Flight');
  return $flights;
}

function addFlight($flight){
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO Flight
    (Flight ID, origin, destination,departure d, departure day, departure t,duration) VALUES (?,?,?,?,?,?)');
  $statement->execute([$flight->FlightID
                      $flight->origin,
                      $flight->destination,
                      $flight->departureday,
                      $flight->departuret,
                      $flight->duration
                      ]);
}


?>
