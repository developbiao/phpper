<?php
header('Content-Type:text/html; charset=utf-8');
/*
抽象类的应用场景：
一个项目用会数据库，不知道
引来问题：
换数据库以前的代码都要重新写？
解决 ：
使用抽象，开发就是以db抽象类开开发
*/


abstract class db{
	//connet
	public abstract function connet($host, $user, $password);

	//query

	public abstract function query($sql);

	//close
	public abstract function close();
}


/*
业务逻辑不用修改，因为孝实现了db抽象类
我们开发是时，调用方法不清楚的地方
我就可以参考db抽象类反正都是严格的抽象类
*/


class mysql extends db{
	public function connet($host, $user, $password){

		return true; //假设连接成功
	}


	public function query($sql){
		//.....	
	}


	public function close(){
		//......	
	}
}





?>
