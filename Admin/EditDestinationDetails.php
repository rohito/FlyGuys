<?php
    session_start();
    require_once "../Controller/dataAccess-db.php";
    require_once "../Model/Model.php";

    $destinationID =  $_REQUEST["DestinationID"];
    $flightList = getFlightsByDestinationID($destinationID);

 ?>

<!DOCTYPE html>
<html>
  <head>
  <body>
    <h1>Edit Flight details</h1>
    Flight Details:</br>
    <form action="EditDestination.php" method="post">
        <?php foreach ($flightList as $Destination): ?>
          <br>Destination ID:<?=$Destination->DestinationID?></br>
          Enter New Destination ID:</br>
          <input type="text" name="newID"></br>

          <br>Destination Type:<?=$Destination->Type?></br>
          Enter New Destination Type:</br>
          <input type="text" name="newType"> </br>

        <br>Destination Name:<?=$Destination->Name?></br>
        Enter New Destination Name:</br>
        <input type="text" name="newDestination"></br>



        <br>Duration:<?=$Destination->Duration?></br>
        Enter New Duration of Flight:</br>
        <input type="text" name="newDuration"></br>

        <br>Destination Date:<?=$Destination->DepartureDate?></br>
        Enter New Destination Date:</br>
        <input type="text" name="newDestinationDate"></br>

        <br>Destination Day:<?=$Destination->DepartureDay?></br>
        Enter New Destination Day:</br>
        <input type="text" name="newDestinationDay"></br>

        <br>Destination Time:<?=$Destination->DepartureTime?></br>
        Enter New Destination Time:</br>
        <input type="text" name="newDestinationTime"></br>
        <?php endforeach ?>
        <input type ="submit" value="Submit">
    </form>

  </body>
</html>
