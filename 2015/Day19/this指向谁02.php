<?php
header('Content-Type:text/html; charset=utf-8');
class baseClass{
	public function testFunc(){
		echo "\n".'I`m boss';
	}
}

class parentClass extends baseClass{
	public function testFunc(){
		echo "\n".'I`m the up';
	}
}

class testClass extends parentClass{
	var $nick = '';

	public function __construct($nick){
		$this->nick = $nick;
	}

	public function Display(){
		echo $this->nick;  
		$this->testFunc();
	}
}


$otherClass1 = new testClass('frank');  //frank
$otherClass1->Display();   //I'm the up

/*
这样的代码最后的输出结果是什么呢？关键是看testFunc()方法。

    如果在类中用$this调用一个当前类中不存在的方法或变量，它会依次去父类寻找，直到找不到再报错
    基于第一条，如果找到了需要的方法或变量，就会停止寻找，如果其上级父类中还有同样的，则选择当前找到的

*/
?>
