<?php
header("Content-Type:text/html; charset=utf-8");
/*
==========笔记============
面向对象的一个观点
做的越多，越容易犯错

抽象类{就定义类模板}---具体子类实现{china,jpan, engish}

接口 
*/


//抽象数据库类

/*
创业做网站
到底用什么数据库？msyql, oracle,db2,sqlserver, postgresql?
这样：行开发网站，运行再说 。
先弄个msyql开发着，正式了再数据库也不迟

引来问题：
换数据库，会不会以前的代码又得重写？

答：不必，用抽象类
开发都，开发是就以db抽象类来开发
*/


abstract class db{
	//connect
	public abstract function connect($host, $user, $password);

	//query

	public abstract function query($sql);

	//close 
	public abstract function close();

}


/*
下面这个mysql类，严格实现了db抽象类，
试想：不管上线时，真正用什么数据库
我只需要再写一份如下类


class oracle extends db{

}


class mysql extends db{

}

class postsql extends db{

}


业务逻辑不用改，因为都实现了db抽象类
我开发是，调用方法不清楚的地方，
我就可以参考db抽象类反正类都是严格实现的抽象类
*/


class mysql extends db{
	public function connect($host, $user, $pass){
		return true; //假设成功

	}

	public function query($sql){

	}

	public function close(){

	}


}


/*
接口 就更加抽象了

比如一个社交网站，

关于用户的处理是核心应用

登陆
退出
写信
看信
招呼更换心情
吃饭
骂人
捣乱
示爱
撩骚

这么多的方法，都是用户的方法
自然可以写一个user类,全包装起来

但是，分析用户一次性使用了不这么多方法

用户信息类：{登陆，写信，看信，招呼，更换心情，退出}

用户娱乐类:{登陆，骂人， 捣乱，求爱，撩骚 ，退出}


开发网站前，分析出来这么多方法，
但是，不能都装在一个类里

作应用逻辑的开发，这么多类，这么多的方法，都晕了
*/


interface UserBase{
	public function login($user, $pass);

	public function logout();
}


interface UserMsg{
	public function wirteMsg($to, $title, $content);

	public function readMsg($from, $title);
}


interface UserFun{
	public function spit($to);
	public function play();
	//.....
}


/*
作为调用者，我不需要了解你的用户信息类，用户娱乐类
我就可以知道如何调用这两个类

类为：这两个类，都要实现 上述接口
通过这个接口，就可以规范开发
*/


/*
下面这个类，和接口声明的参数不一样，就报错，接口强制
统一了类的功能
不管你有几个类，一个类中有几个方法
*/

//调用者角度
class User implements UserBase{

	public function login($user, $pass){


	}

	public function logout(){

	}
}


?>
