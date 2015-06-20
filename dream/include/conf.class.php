<?php
/***
file conf.class.php

配置文件读写类
***/
header('Content-Type:text/html; charset=utf-8');

defined('ACC') || exit('ACC Denied!');

class conf{
	protected static $ins = NULL;
	protected $data = array();

	final function __construct(){

		//一次性把配置文件信息，读取过来，赋给data属性
		//这样以后就不再管配置文件了
		//再要配置的值是,直接从data属性中找

		include(ROOT.'include/config.inc.php');
		$this->data = $_CFG;

	}

	public static function getIns(){
		if(self::$ins instanceof self){
			return self::$ins;
		}else{
			return self::$ins = new self();
		}
	}

	final function __clone(){

	}

	//动态获取属性
	public function __get($key){
		if(array_key_exists($key, $this->data)){
			return $this->data[$key];
		}else{
			return null;
		}
	}


	//动态修改属性
	public function __set($key, $value){
		$this->data[$key] = $value;
	}



}


/***
Test测试

$conf = conf::getIns();

echo '<pre>';
print_r($conf);
echo '</pre>';

echo '---------------------获取属性-------------------<br />';
echo '主机是:',$conf->host,'<br />';
echo '用户名是:',$conf->user,'<br />';


echo '----------------------设置属性------------------<br />';
$conf->email = 'developbiao@biao.com';

echo '<pre>';
print_r($conf);
echo '</pre>';

echo '<br />';
var_dump($conf->template_dir);

$conf->template_dir = 'c:/windows/system32';

echo $conf->template_dir;


echo 'ok<br />';

*/

?>