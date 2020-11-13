<?php
include_once ("Point.php");
include_once ("MoveablePoint.php");
$point = new Point(1,5);
echo $point->toString();
$moveablePoint = new MoveablePoint(1,2,3,4);
echo $moveablePoint->toString();
