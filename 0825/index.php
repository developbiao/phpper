<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');

class TestClass{
    const tConst = 1;
    public $tVar = 2;
    public static $tSta = 3;

    public function __construct(){

        //echo $this->tConst; //Notice: Undefined property: TestClass::$tConst in /mnt/hgfs/workspace/phpper/0825/index.php on line 14
        //echo  self::tConst; //正确输出1

        //echo self::$tVar; //Fatal error: Access to undeclared static property: TestClass::$tVar in /mnt/hgfs/workspace/phpper/0825/index.php on line 17
        //echo $this->tVar; //正确输出2


        //echo $this->tSta; //Strict Standards: Accessing static property TestClass::$tSta as non static in /mnt/hgfs/workspace/phpper/0825/index.php on line 21
        //echo self::$tSta; //正确输出3


    }
}


$test = new TestClass();
echo $test::tConst;

/*
总结：
-------------------
实例化对象调用：
常量的访问不需要加$
$test::tConst

静态变量的使用
$test::$tSta

------------------

本类中调用：
常量访问
self::tConst

静态变量中访问 
self::$tSta

*/



?>