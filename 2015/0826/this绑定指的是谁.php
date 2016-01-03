<?php
/*
php中的多态practice
*/
header('Content-Type:text/html; charset=utf-8');

class A{
	function foo(){
		if(isset($this)){
			echo '$this is defined (';
			echo get_class($this);
			echo ')<br />';
		}else{
			echo '$this is not defined<br />';
		}
	}
}


class B{
	function bar(){
		A::foo();
	}
}


$a = new A();
$a->foo();
A::foo(); //Strict Standards: Non-static method A::foo() should not be called statically 

echo '<hr/>';

$b = new B(); 
$b->bar(); //this is defined B
B::bar(); //this is not defined




echo '<h3>Program runing is ok!</h3>';

?>
