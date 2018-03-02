<?php
session_start();
require_once ('model/Flight.php');
require_once ('dataAccess-db.php');

if (!isset($_SESSION["destinationsearch"]))
{

  $_SESSION["destinationsearch"] = [];
}

$search = "";
if (isset($_REQUEST["searchdestination"]) && $_REQUEST["searchdestination"] != "")
{
  $searchname = $_REQUEST["searchdestination"];
  if (!in_array($searchname,$_SESSION["destinationsearch"]))
  {
      $_SESSION["destinationsearch"][] = $searchname;
  }
}

$lastsearch = $_SESSION["destinationsearch"];

$flightlistdestination = getFlightsByDestination($searchname);

require_once ("index.php");
?>
