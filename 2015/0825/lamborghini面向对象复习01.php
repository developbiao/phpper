<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');

class Human{
   public $eye = 2; 
}

class Car{
    public $wheel = 4; 

    public function Auto(){
        echo 'wuwuw 启动了！'; 
    }

}

$lamborghini = new Car();

echo $lamborghini->wheel;

echo '<br />';
$lamborghini -> Auto();


?>
