<?php
include_once ("Circle.php");

class cylinder extends Circle
{
    public $height;
    public function __construct($color, $radius,$height)
    {
        parent::__construct($color, $radius);
        $this->height = $height;
    }
//    public function setHeight($height){
//        $this->height;
//    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter()*$this->height;

    }
    public function calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }
    public function toString(){
        return $this->getColor()."<br>".$this->getRadius()."<br>" .$this->calculateArea()."<br>" .$this->calculateVolume();
    }
}