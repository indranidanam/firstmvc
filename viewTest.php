<?php
include 'controllerTest.php';

class viewTest{
    private $model;
    private $controller;
    
    public function __construct(controllerTest $controller, modelTest $model){
        
        $this->model = $model;
        $this->controller = $controller;
    }
    public function output(){
        return '<h1>'. $this->model->text .'</h1>';
    }
}
$viewtest1 = new viewTest($controller1,$model1);
echo $viewtest1->output();

?>