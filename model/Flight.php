<?php
class Flight implements JsonSerializable{
$flightId;
$origin;
$destination;
$departureD;
$departureDay;
$departureT;
$duration;

function __get($name){
  return $this->$name;
}
function __set($name,$value){
  $this->$name = $value;
}
public function jsonSerialize(){
        return [
            'flight ID' => $this->flightID,
            'Origin' => $this->origin,
            'Destination' => $this->destination,
            'Departure Date'=>$this->departureD,
            'Departure Day'=> $this->departureDay,
            'Departure Time'=>$this->departureT,
            'Duration'=>$this->duration;

        ];
    }

}
?>
