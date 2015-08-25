<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');

class ShopCar{
    private static $instance;
    private function __construct(){} //私有化构造器
    private function __clone(){} //私有化clone方法

    public static function getCar(){
       if(self::$instance == null){
            self::$instance = new ShopCar();
       } 

       return self::$instance;
    }

    public function getNum(){
        echo '<h3>',mt_rand(), '</h3>';
    }


}


//$obj = new ShopCar();

$obj = ShopCar::getCar(); 
echo '<pre>';
print_r($obj);
echo '</pre>';
$obj->getNum();


echo '<h3>Program Ring is ok! </h3>';


?>
