<?php

include_once ("Grandfather.php");
class MyParent extends Grandfather
{
    public function __construct($age)
    {
        parent::__construct($age);
    }

    public function getRun(){
        return "Cha chay 10km/h";
    }
    public function getSing(){
        return "Cha hat rat hay";
    }
    public function toString()
    {
        return "Cha ".$this->getAge()." tuoi "."<br>".$this->getRun()."<br>".$this->getSing()."<br>";
    }

}