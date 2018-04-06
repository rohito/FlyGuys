<?php
class Journey implements JsonSerializable{
private $JourneyID;
private $departureDate;
private $departureDay;
private $departureTime;
private $DestinationID;

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
