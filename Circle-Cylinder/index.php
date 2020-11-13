<?php
include_once ("Circle.php");
include_once ("cylinder.php");
$circle = new Circle("red", 3);
echo "Hinh tron co ".$circle->getColor()."<br/>"." ban kinh ".$circle->getRadius()."<br/>";
echo "Dien tich ".$circle->calculateArea()."<br/>"." chu vi ".$circle->calculatePerimeter()."<br>";
$cylinder = new Cylinder("blue",3,5);
echo $cylinder->toString();