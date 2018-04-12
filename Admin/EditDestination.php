<?php
      session_start();
      require_once "../Controller/dataAccess-db.php";
      require_once "../Model/Model.php";

      $ID= $_REQUEST["newID"];
      $Name = $_REQUEST["newDestination"];
      $Type = $_REQUEST["newType"];
      $Duration = $_REQUEST["newDuration"];
      $Date = $_REQUEST["newDestinationDate"];
      $Day = $_REQUEST["newDestinationDay"];
      $Time = $_REQUEST["newDestinationTime"];


      $Destination = new Destination();
      $Destination->DestinationID=htmlentities($ID);
      $Destination->Name = htmlentities($Name);
      $Destination->Type = htmlentities($Type);
      $Destination->Duration = htmlentities($Duration);
      $Destination->DepartureDate = htmlentities($Date);
      $Destination->DepartureDay = htmlentities($Day);
      $Destination->DepartureTime = htmlentities($Time);


      echo json_encode($Destination);
      editDestination($Destination);
      $status = "$Name has been updated";

      header("index.php")
    //}
  ?>
