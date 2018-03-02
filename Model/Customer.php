<?php
class Customer {
$customerID;
$firstName;
$surname;
$email;

function __get($name){
  return $this->$name;
}
function __set($name,$value){
  $this->$name = $value;
}
}
 ?>
