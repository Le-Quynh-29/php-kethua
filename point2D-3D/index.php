<?php
include_once ("Point2D.php");
include_once ("Point3D.php");
$point2d = new Point2D(1,2);
echo $point2d->toString()."<br>";
$point3d = new Point3D(1.3,2,3);
echo $point3d->toString();