<?php
class Customer implements JsonSerializable{
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

public function jsonSerialize(){
        return [
            'Customer ID' => $this->customerID,
            'First Name' => $this->firstName,
            'Surname' => $this->surname,
            'email'=>$this->email;
        ];
    }


}
 ?>
