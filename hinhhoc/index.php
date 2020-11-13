<?php
include_once ("Circle.php");
include_once ("Cylinder.php");
include_once ("Rectangle.php");
include_once ("Square.php");
$circle = new Circle("circle 01",3);
echo "Circle area: ".$circle->calculateArea()."<br/>";
echo "Circle perimeter: ".$circle->calculatePerimeter()."<br/>";
$cylinder = new Cylinder("Cylinder 01",3,4);
echo "Cylinder area: ".$cylinder->calculateArea()."<br>";
echo "Cylinder perimeter: ".$cylinder->calculateVolume()."<br/>";
$rectangle = new Rectangle("Rectangle 01",3,5);
echo "Rectangle area: ".$rectangle->calculateArea()."<br/>";
echo "Rectangle perimeter: ".$rectangle->calculatePerimeter()."<br/>";
$square = new Square("Square 01",4);
echo "square area: ".$square->calculateArea()."<br/>";
echo "square perimeter: ".$square->calculatePerimeter();