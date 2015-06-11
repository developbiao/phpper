<?php
header('Content-Type:text/html; charset=utf-8');

/*
与函数有关的魔术方法
__call
__callStaic
*/


Class Human{
	public function hello(){
		echo 'hello <br />';
	}

	private function t(){

	}


	public static function __callStatic($method, $args){  //5.3之上才支持这种带参数形式的静态函数调用方式
		echo '你想调用一个不存在或无权调用的静态方法',$method,'<br />'; //5.2x会出现：Parse error: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM
		echo '你调用时还传了参数<br />';
		echo '<pre>';
		print_r($args);
		echo '</pre>';
	}


	public function __call($method, $args){
		echo '你想调用一个不存在或无权调用的方法',$method,'<br />';
		echo '你调用时还传了参数<br />';
		echo '<pre>';
		print_r($args);
		echo '</pre>';
	}


}

$lijun = new Human();

$lijun->thinklog('s', 'a', 'p', 't');   // 调用一个不存在的方法时机触动了__call();

$lijun::SeeMeinv('大哭', '小哭', '大笑');    //调用不个不存在的静态方法时机触动了__callStaic();


/*
总结：
__callStatic 是调用不可见的静态方法时，自动调用的

*/

?>
