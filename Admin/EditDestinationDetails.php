<?php
    session_start();
    require_once "../Controller/dataAccess-db.php";
    require_once "../Model/Model.php";

    if(isset($_SESSION['username'])){
          $username = $_SESSION['username'];
  		}
      else{
          header("Location: ../index.php");
      }

    $destinationID =  $_REQUEST["DestinationID"];
    $flightList = getFlightsByDestinationID($destinationID);

 ?>

<!DOCTYPE html>
<html>
  <head>
  <body>
    <h1>Edit Flight details</h1>
    Flight Details:</br>
    <form action="EditDestinationDetails.php" method="post">
        <?php foreach ($flightList as $Destination): ?>
        </br>Destination Name:<?=$Destination->Name?></br>
        Enter New Destination Name departure from:</br>
        <input type="text" name="newDestination"></br>

        Duration:<?=$Destination->Duration?></br>
        Enter New Destination Name departure from:</br>
        <input type="text" name="newDestination"></br>

        Destination Day:<?=$Destination->DepartureDay?></br>
        Enter New Destination Name departure from:</br>
        <input type="text" name="newDestination"></br>

        Destination Date:<?=$Destination->DepartureDate?></br>
        Enter New Destination Name departure from:</br>
        <input type="text" name="newDestination"></br>
        <?php endforeach ?>
        <input type ="submit" value="Submit">
    </form>

  </body>
</html>
