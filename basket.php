<?php
    session_start();
    require_once ("Controller/dataAccess-db.php");
    require_once ("Model/Model.php");

//echo "Your chosen DestinationID is: ".($_REQUEST["DestinationID"]);

  $destinationID =  $_REQUEST["DestinationID"];
  $flightList = getFlightsByDestinationID($destinationID);
  //checkBooking();
?>

<html>
  <body>
      <h1>Shopping Basket</h1>
      Flight Details:</br>
      <?php foreach ($flightList as $Destination): ?>
      Destination Name:<?=$Destination->Name?></br>
      Duration:<?=$Destination->Duration?></br>
      Destination Day:<?=$Destination->DepartureDay?><br>
      Destination Date:<?=$Destination->DepartureDate?></br>
      <?php endforeach ?>
  </body>
</html>
