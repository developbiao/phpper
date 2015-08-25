<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');

class A {
    public $say = 'restaurant'; 

    public function __construct(){
        echo '我是50年代在人了<br />';
    }


    public function restaurant(){
        echo '<h3>大家都在吃火锅呢</h3>';
    }


}

class B extends A{
    public function __construct(){
        parent::__construct(); //调用父类的构造器
        echo '我是90后!';
    }


    public function eat(){
        parent::restaurant();
        echo '<h3>我现在还中串串!</h3>';
    }


}


$stu1 = new B();
$stu1->eat();

/*
输出：
我是50年代的人了
我是90后 
大家都在吃火锅呢
我现在还中串串!

*/



?>
