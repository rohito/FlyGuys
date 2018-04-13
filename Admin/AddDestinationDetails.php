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

 ?>


 <!DOCTYPE html>
 <html>
   <head>
   <body>
        <form action="AddInfo.php" name="AddNewDestination" method="post">
             Enter New Destination Name :</br>
             <input type="text" name="newDestination"></br>

             Enter (1) for Domestic Type or (2) For Internation Type:</br>
             <input type="text" name="type"></br>

             Enter Duration time (HH:MM):</br>
             <input type="text" name="duration"></br>

             Enter Date(DD:MM:YY):</br>
             <input type="text" name="date"></br>

             Enter Day:</br>
             <input type="text" name="day"></br>

             Enter Departure Time(HH:MM)</br>
             <input type="text" name="time"></br>

             <input type ="submit" value="Submit">
          </form>
   </body>
</html>
