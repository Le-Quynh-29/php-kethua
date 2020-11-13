<?php

include_once ("MyParent.php");
class child extends MyParent
{
    public function __construct($age)
    {
        parent::__construct($age);
    }
    public function getRun()
    {
        return "Con chay 20km/h";
    }
    public function getSing()
    {
        return " nhung khong hay bang cha";
    }
    public function toString(){
        return "Con ".$this->getAge()." tuoi ". $this->getRun().'<br>'.$this->getSing()."<br>";
    }
}