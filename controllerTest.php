<?php
include 'Modeltest.php';
class controllerTest{
    private $model;
    
    public function __construct(modelTest $model){
        $this->model= $model;

    }
}
$controller1 = new controllerTest($model1);
?>