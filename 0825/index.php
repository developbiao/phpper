<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');
class ShopCar{
    private static $instance;
    public $hash;
    private function __construct(){
        $this->hash = mt_rand(1, 99999);
    } //私有化构造器
    private function __clone(){} //私有化clone方法

    public static function getCar(){
       if(!(self::$instance instanceof self)){
            self::$instance = new ShopCar();
       } 

       return self::$instance;
    }



}

class TestSignle{
    public function __construct(){
       parent::__constract(); 
    }
}


//$obj = new ShopCar();

$obj = ShopCar::getCar(); 
$obj2 = ShopCar::getCar();
echo '<pre>';
print_r($obj);
echo '</pre>';
echo '<h3>--------------</h3>';
echo $obj->hash,'|----|', $obj2->hash;
if($obj === $obj2){
    echo '是同一个对象<br />';
}else{
    echo '不是同一个对象<br />'; 
}

echo '<h3>Program Ring is ok! </h3>';


?>