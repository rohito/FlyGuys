<?php
class Flight {
private $flightId;
private $origin;
private $destination;
private $departureDay;
private $departureTime;
private $duration;

  function __get($name){
  return $this->$name;
  }

  function __set($name,$value){
  $this->$name = $value;
  }
}
?>
