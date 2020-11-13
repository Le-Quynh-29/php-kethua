<?php
class Shape
{
    public $name;
    public function  __construct($name){
        $this->name = $name;
    }
    public function show(){
        return "Day la 1 hinh. Do la hinh $this->name";
    }

}