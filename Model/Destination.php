<?php
class Destination implements JsonSerializable{
private $DestinationID;
private $Name;
private $Type;
private $Duration;
private $DepartureDate;
private $DepartureDay;

function __get($name){
  return $this->$name;
}
function __set($name,$value){
  $this->$name = $value;
}
public function jsonSerialize(){
    return get_object_vars($this);
  }
}
?>
