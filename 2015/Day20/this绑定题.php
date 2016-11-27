<?php
header('Content-Type:text/html; charset=utf-8');
/***
====笔记部分====
这一题很典型的体现
static 静态方法的特点: 不绑定$this

***/


class A
{
	function foo()
		{
		if (isset($this)) {
		echo '$this is defined (';
		echo get_class($this);
		echo ")\n";
		} else {
		echo "\$this is not defined.\n";
		}
	}
}

class B
{
function bar()
{
A::foo();
}
}

$a = new A();
$a->foo();   // foo是普通方法,$a绑定到$this,因此,$this is defined(A);
A::foo();    // 这样调用,是不规范的.$this is not defined

$b = new B();
$b->bar();   // bar是普通方法,$b绑定到$this,bar(){A::foo-这里是静态调用,不操作$this}
             // $this is defined (B);
B::bar();    // this is not defined

?>
