<?php


class Point
{
    public $x;
    public $y;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x){
        $this->x = $x;
    }
    public function getX(){
        return $this->x;
    }
    public function setY($y){
        $this->y = $y;
    }
    public function getY(){
        return $this->y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        $arr = array($this->x,$this->y);
        foreach ($arr as $value){
            return $value;
        }
    }
    public function toString(){
        return "($this->x,$this->y)"."<br>";
    }

}