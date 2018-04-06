<?php
    session_start();
    require_once ("Controller/dataAccess-db.php");
    require_once ("Model/Destination.php");
    require_once ("Model/Journey.php");
    require_once ("Model/Customer.php");

    $flightList="";

    if((isset($_REQUEST["searchDestinationFlight"])) && $_REQUEST["searchDestinationFlight"] != "")
      {
        if((isset($_REQUEST["searchDepartureFlight"])) && $_REQUEST["searchDepartureFlight"] = "")
        {
          if((isset($_REQUEST["searchDate"])) && $_REQUEST["searchDate"] = "")
          {
            if((isset($_REQUEST["day"])) && $_REQUEST["day"] = "")
            {
              $searchFlight = $_REQUEST["searchDestinationFlight"];
              $flightList = getFlightsByDestination($searchFlight);
            }
          }
        }

      }
      /*elseif (isset($_REQUEST["searchDate"])){
        $searchDate = $_REQUEST["searchDate"];
        $flightList = getFlightsByDate($searchDate);
      }
      elseif (isset($_REQUEST["day"])){
        $searchDay = $_REQUEST["day"];
        $flightList = getFlightsByDate($searchDay);
      }*/
      else{
        $flightList = getAllFlights();
      }

      //to check what result has been passed back
      //echo json_encode($flightList);
?>

<!DOCTYPE html>
<html>
  <head>
  <body>
    <table>
      <thead>
          <tr>
            <th>Departure From:</th>
            <th>Destination Name:</th>
            <th>Duration:</th>
            <th>Destination Day:</th>
            <th>Destination Date:</th>
          </tr>
      </thead>
      <tbody>
              <?php foreach ($flightList as $Destination): ?>
              <tr>
                <td>Stanstead</td>
                <td><?=$Destination->Name?></td>
                <td><?=$Destination->Duration?></td>
                <td><?=$Destination->DepartureDay?></td>
                <td><?=$Destination->DepartureDate?></td>
                <td><form action="basket.php" method="post"><input type ="hidden" name= "DestinationID" value ="<?=$Destination->DestinationID?>"><input type ="submit" value="Add To Basket"></form></td>
              </tr>
              <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
