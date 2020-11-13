<?php
include_once ("Grandfather.php");
include_once ("MyParent.php");
include_once ("child.php");
$grandfather = new Grandfather(70);
echo $grandfather->toString();
$father = new MyParent(30);
echo $father->toString();
$child = new  child(15);
echo $child->toString();