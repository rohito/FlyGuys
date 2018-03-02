<?php
    session_start();
    require_once ("../Model/Flight.php");
    require_once ("../Controller/dataAccess-db.php");
    //require_once ("index.php");

    //check if SESSION has already been created
    if (!isset($_SESSION["lastSearch"]))
    {
        $_SESSION["lastSearch"] = []; //if session was not created before assign $_SESSION["lastsearch"] to empty array
    }

    $searchFlight ="";
    //check is search was performed and searchFlight field is not empty
    if (isset($_REQUEST["searchFlight"]) && $_REQUEST["searchFlight"] !="")
    {
        $searchFlight = $_REQUEST["searchFlight"];
        //perform search only if the search item is not already in SESSION variable array
        if (!in_array($searchFlight, $_SESSION["lastSearch"]))
        {
            $_SESSION["lastSearch"][] = $searchFlight;
        }

        $lastSearch = $_SESSION["lastSearch"];
        $flightList = getFlightsByOrigin($searchFlight);
        echo sizeof($flightList);
    }
?>
