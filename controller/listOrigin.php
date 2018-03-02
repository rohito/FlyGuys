<?php
session_start();
require_once ('../model/Flight.php');
require_once ('dataAccess-db.php');

if (!isset($_SESSION["originsearch"]))
{

  $_SESSION["originsearch"] = [];
}

$search = "";
// if they performed a search, i.e. if one of the searchname
// fields is filled in
if (isset($_REQUEST["searchorigin"]) && $_REQUEST["searchorigin"] != "")
{
  $searchname = $_REQUEST["searchorigin"];
  // add the search onto the end of the session variable array
    // but only if it's not already there...
  if (!in_array($searchname,$_SESSION["originsearch"]))
  {
      $_SESSION["originsearch"][] = $searchname;
  }
  // Remember the grammar! $_SESSION["lastsearch"] is going to
    // give us an array. We can append [] = to any array to add a new
    // item to it
}

$lastsearch = $_SESSION["originsearch"];

$flightlistorigin = getFlightsByOrigin($searchname);

require_once ("index.php");
?>
