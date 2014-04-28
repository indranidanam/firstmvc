<?php
include 'Modeltest.php';
include 'controllerTest.php';
include 'viewTest.php';

echo " in the mvctest class";

$model1 = new modelTest();
var_dump($model1);
$controller1 = new controllerTest($model1);
$view1 = new viewTest($controller1,$model1);

$view1->output();
?>