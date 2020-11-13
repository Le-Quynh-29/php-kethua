<?php


class Grandfather
{
    public $age;
    public function __construct($age){
        $this->age = $age;
}
public function setAge($age){
        $this->age = $age;
}
public function getAge(){
        return $this->age;
}
    public function getRun(){
        return "5km/h";
    }
    public function toString(){
        return "Ong ".$this->getAge()." tuoi "."<br>".$this->getRun()."<br>";
    }
}