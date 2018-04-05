<?php
class Journey implements JsonSerializable{
private $JourneyID;

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
