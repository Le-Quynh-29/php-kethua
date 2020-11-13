<?php

include_once ("Shape.php");
class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;
    public function __construct($name,$side1=1,$side2=1,$side3=1)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getArea(){
        if($this->side1 + $this->side2 > $this->side3 &&
        $this->side2 + $this->side3 > $this->side1 &&
        $this->side1 + $this->side3 > $this->side2){
            if($this->side1*$this->side1 + $this->side2*$this->side2 == $this->side3*$this->side3){
                return ($this->side1 * $this->side2)/2;
            } elseif(pow($this->side2,2) + pow($this->side3,2) == pow($this->side1,2)){
                return ($this->side2*$this->side3)/2;
            } elseif (pow($this->side1,2) + pow($this->side3,2) == pow($this->side2,2)){
                return ($this->side1*$this->side3)/2;
            } elseif ($this->side1 == $this->side2 && $this->side2 == $this->side3){
                return ($this->side1*3*sqrt(2))/4;
            } else{
                return "Tam giac nay kho tinh dien tich";
            }
        } else{
            return "Khong phai la tam giac";
        }
    }
    public function getPerimeter(){
        return ($this->side1 + $this->side2 + $this->side3);
    }
    public function toString(){
        if($this->side1 + $this->side2 > $this->side3 &&
            $this->side2 + $this->side3 > $this->side1 &&
            $this->side1 + $this->side3 > $this->side2) {
            return "Tam giac co do dai 2 canh la " . "$this->side1, " . "$this->side2, " . "$this->side3," . "<br>" .
                "Dien tich: " . $this->getArea() . "<br>" .
                "Chu vi: " . $this->getPerimeter();
        }
        else{
            return "khong phai tam gíac";
        }
    }
}