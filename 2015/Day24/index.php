<?
/***
所有由用户直接访问的这些页面

都得先加载 init.php
***/
header('Content-Type:text/html;charset=utf-8');

require('./include/init.php');

//Log::write('hello 中国人...');

class mysql{
	public static function query($sql){
		//xxxx查询
		//记录
		Log::write($sql);	
	}
}


$start = microtime(true);

for($i=0; $i < 10000; $i++){
	$sql = 'SELECT good_name, good_id, shop_price FROM goods WHERE good_id='.mt_rand(1, 1000);
	mysql::query($sql);

}
$end = microtime(true);
echo '<h3>耗时:',($end-$start),'</h3>';
echo '<h3>程序已执行!</h3>';
?>