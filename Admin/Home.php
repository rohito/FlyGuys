<?php
    session_start();
  //require_once "../Utils/connection.php";
  require_once "../Controller/dataAccess-db.php";
  require_once "../Model/Model.php";


  $flightList = getAllFlights();


  //Relocation for already logged in users, or users in wrong area
	if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
		}
    else{
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html>
  <head>
  <body>
    <h1>Welcome<?php echo(" , ".$username)?></h1>
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
                <td><form action="EditDestinationDetails.php" method="post"><input type ="hidden" name= "DestinationID" value ="<?=$Destination->DestinationID?>"><input type ="submit" value="Edit"></form></td>
                <td><form action="EditDestinationDetails.php" method="post"><input type ="hidden" name= "DestinationID" value ="<?=$Destination->DestinationID?>"><input type ="submit" value="Delete"></form></td>
              </tr>
              <?php endforeach ?>

              <form action="AddDestinationDetails.php" method="post"><input type ="submit" value="Add new Destination"></form>

      </tbody>
    </table>

    <form action="../Utils/logout.php" method="post">
      <input type ="submit" value="Log Out">
    </form>
  </body>
</html>
