<?php

include_once ("Point.php");
class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
 public function __construct($x, $y,$xSpeed,$ySpeed)
 {
     parent::__construct($x, $y);
     $this->xSpeed = $xSpeed;
     $this->ySpeed = $ySpeed;
 }
 public function setXSpeed($xSpeed){
     $this->xSpeed = $xSpeed;
 }
 public function getXSpeed(){
     return $this->xSpeed;
 }
    public function setYSpeed($ySpeed){
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
      $arr = array($this->xSpeed,$this->ySpeed);
      foreach ($arr as $value){
          return $value;
      }
    }
    public function toString()
    {
        return parent::toString(). " speed= "."($this->xSpeed,$this->y)";
    }
}