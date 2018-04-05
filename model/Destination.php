<?php
class Destination implements JsonSerializable{
private $DestinationID;
private $Name;
private $Type;
private $Duration;
private $departureDate;
private $departureDay;
private $departureTime;

function __get($name){
  return $this->$name;
}
function __set($name,$value){
  $this->$name = $value;
}
public function jsonSerialize(){
  return get_object_var($this);
}

}
?>
