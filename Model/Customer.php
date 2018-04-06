<?php
class Customer implements JsonSerializable{
private $CustomerID;
private $Name;
private $Surname;
private $Email;

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
