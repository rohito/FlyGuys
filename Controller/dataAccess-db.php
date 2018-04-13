<?php
$db_user = "k1553451";
$db_name = "db_k1553451";
$db_password = "poo";


$pdo = new
 PDO("mysql:host=kunet.kingston.ac.uk;dbname=$db_name",
$db_user,$db_password);


function getAllCustomers(){
  global $pdo;
  $statement = $pdo->prepare('SELECT CustomerID,Name, Surname, Email FROM Customer');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS,'Customer');
  return $result;
}

function getAllJourney(){
  global $pdo;
  $statement =$pdo->prepare('SELECT JourneyID,DepartureDate,DepartureDay, DepartureTime,DestinationID FROM Journey');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS,'Journey');
  return $result;
}

function getAllFlights(){
  global $pdo;
  $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS,'Destination');
  return $result;
}

function getFlightsByDestination($flight){
  if($flight == " "){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination WHERE Name = ?');
  $statement->execute([$flight]);
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Destination');
  return $flights;
}

function getFlightsByDate($flight){
  if($flight == ""){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination WHERE DepartureDate=?');
  $statement->execute([$flight]);
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Destination');
  return $flights;
}

function getFlightsByDestinationID($flight){
  global $pdo;
  $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination WHERE DestinationID=?');
  $statement->execute([$flight]);
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Destination');
  return $flights;

}

function getFlightsByDay($flight){
  if($flight==""){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination WHERE DepartureDay=?');
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Destination');
  return $flights;
}

function getFlightsByDestinationDate($flight,$date){
  if($flight=="" && $date==""){
    return getAllFlights();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination WHERE Name=?,DepartureDate=?');
  $flights=$statement->fetchAll(PDO::FETCH_CLASS,'Destination');
  return $flights;
}

function getFlightsByAllFields($flight,$date,$day){
    if($flight=="" && $date==""&&$day==""){
      return getAllFlights();
    }
    global $pdo;
    $statement = $pdo->prepare('SELECT DestinationID,Name,Type,Duration,DepartureDate,DepartureDay FROM Destination WHERE Name=?,DepartureDay=?,DepartureDate=?');
    $flights = $statement->fetchAll(PDO::FETCH_CLASS,'Destination');
    return $flights;

}


function addDestination($flight){
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO Destination
    (Name,Type,Duration,DepartureDate,DepartureDay,DepartureTime) VALUES (?,?,?,?,?,?)');
  $statement->execute([$flight->Name,
                       $flight->Type,
                       $flight->Duration,
                       $flight->DepartureDate,
                       $flight->DepartureDay,
                       $flight->DepartureTime]);
}

function editDestination($flight){
  global $pdo;
  $statement = $pdo->prepare('UPDATE Destination SET (Name,Type,Duration,DepartureDate,DepartureDay,DepartureTime) VALUES (?,?,?,?,?,?)');
  $statement->execute([$flight->Name,
                       $flight->Type,
                       $flight->Duration,
                       $flight->DepartureDate,
                       $flight->DepartureDay,
                       $flight->DepartureTime]);
}

function getFlightsByStartOfDestination($partialFlightDestination){
  global $pdo;
  $statement = $pdo->prepare('SELECT * FROM Destination
                              WHERE Name like ?');
  $statement->execute(["$partialFlightDestination%"]);
  $flights = $statement->fetchAll(PDO::FETCH_CLASS, 'Destination');
  return $flights;
}


?>
