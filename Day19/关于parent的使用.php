<?php
header('Content-Type:text/html; charset=utf-8');
class A{
	public $a = 'aa';
	public function callFunc(){
		echo 'parent';
	}
}

class B extends A{
	public function __construct(){
		parent::callFunc();
		echo "\n".$this->a;
	}
}

$oB = new B;
/*
上面的代码中，在class B中，若要调用其父类A中的callFunc()方法，
就需要使用parent::callFunc()，但A类中此方法必须是public修饰的，
否则会提示 Fatal error: Call to private method A::callfunc() from context 'B'...

另外需要注意的是，对于父类中的属性$a，调用的时候用$this，
用parent就访问不到了。若$a在A类中是这样定义的:public static $a，
则访问的时候就需要parent::$a

注意，parent不具备传递性，它只能代表当前类的父类，若此例子A类继承base类，
在base类中定义baseFunc()方法，那么在B类中使用parent::baseFunc()是错误的，只能在A类中这样使用。
*/
?>
