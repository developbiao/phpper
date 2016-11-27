<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');
//看出的问题一继承就出问题了
class Singleton{
  public $hash; //随机码
  static protected $ins = NULL; //用来存储对象

  protected function __construct(){  //保护起来不能new
    $this->hash = mt_rand(1,99999);
  }


  static public function getInstance(){
    if(!(self::$ins instanceof self)) {//instanceof 专门用来判断是不是同一个实例
      self::$ins = new Singleton();
    }
    return self::$ins;
}

}


$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

print_r($s1);
print_r($s2);

if($s1 === $s2){
  echo '是同一对象<br />';
}else{
  echo '不是同不对象<br />';
}


?>