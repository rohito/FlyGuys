<?php
      session_start();
      require_once "../Controller/dataAccess-db.php";
      require_once "../Model/Model.php";

      //if(isset($_REQUEST["AddNewDestination"]))
      //  {
          $Name = $_REQUEST["newDestination"];
          $Type = $_REQUEST["type"];
          $Duration = $_REQUEST["duration"];
          $Date = $_REQUEST["date"];
          $Day = $_REQUEST["day"];
          $Time = $_REQUEST["time"];

          $Destination = new Destination();
          $Destination->Name = htmlentities($Name);
          $Destination->Type = htmlentities($Type);
          $Destination->Duration = htmlentities($Duration);
          $Destination->DepartureDate = htmlentities($Date);
          $Destination->DepartureDay = htmlentities($Day);
          $Destination->DepartureTime = htmlentities($Time);


          echo json_encode($Destination);
          addDestination($Destination);
          $staus = "$Name has been added";
        //}
 ?>
