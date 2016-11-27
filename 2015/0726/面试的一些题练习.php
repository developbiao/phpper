<?php
/*
*@Describe:Json的学习
*@Author:GongBiao
*@Date:2015/07/26
*/
header('Content-Type:text/html; charset=utf-8');

//$date = date('Y-m-d H:i:s', strtotime('-1 day'));
//echo $date;
//smarty phplib

//svn, git ,cvs

//$str = 'hello moto';
//echo strrev($str);

/*
function reverse($str){
	$ret = '';
	$len = mbstrwidth($str, 'GB2312');
	for($i=0; $i<$len; $i++){
		$arr[] = mbsubstr($str, $i ,1, 'GB2312');
	}
	return implode('', array_reverse($arr));
}

print_r(reverse('你好啊!'));
*/
/*
优化Mysql数据库的方法
1使用索引，增加查询效率
2优化查询语句，题高索引命中率
数据库方面
1构造分库分表，提高数据库的存储和扩展能力
2根据需要使用不同的存储引擎
*/


//超过文本预处理语言?
//Hypertext PerPromcessor



//MSYQL 取得当前时间的函数是?
//CURRENT_TIMESTAMP();

//格式化日期的函数是
//SELECT DATE_FORMAT('2010-10-10 7:10:15', '%Y-%m-%d);

//include
//require

//require_onece();
//include_onece();


//file_get_contens
//curl

//file_get_contens
//curl

//file_get_contents
//curl


// 未授权401
//header('HTTP/1.0 404 NOT Found');
//header('HTTP/1.0 404 NOT Found');
//header('Status:404 NOT Found');


//model数据结构层
//view展现
//control:接收和判断处理


//&表示传引用

//regex = ([a-z0-9\.-]+)@([\da-z\.-]+)\.([a-z\.],2,6)


//session_set_cookie_params

//alert();
//confrim
//promopt()
//focus()

//window.location.href="";

//@代表所有warning忽略

//指出一此在PHP输入一段HTML代码办法
/*
echo '{html}'
echo <<EOD;
{html}
echo EOD;
*/

//error_reporting(2047); //report All errors and wargings
//$str = 'abcdef';
//$a = substr($str, 0, 1);

/*
public function __construct(){

}

public function __destruct(){

}
*/

//PHP提供子支持JAVA的类库文件，或HTTP协议来交互数据

/*
echo $_SERVER['REMOTE_ADDR']; 
echo '<br />';
echo $_SERVER['SERVER_ADDR'];
*/

/*
function reverse($str){ 
    $r = array(); 
    for($i=0; $i<mb_strlen($str); $i++){ 
        $r[] = mb_substr($str, $i, 1, 'UTF-8'); 
    } 
    return implode(array_reverse($r)); 
} 
echo reverse('www.phpfensi.com php粉丝网'); 

*/

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '123456';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn){
	die('Could not connect to mysql');
}

echo 'Connect successfully!';
mysql_select_db('demo');
$sql = 'SELECT * FROM user';
$retval = mysql_query($sql);

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
	echo " id->{$row['id']}<br />";
	echo " username->{$row['username']}<br />";
	echo " passowrd->{$row['password']}<br />";
}

echo 'Fetched data successfully\n';

mysql_close($conn);

?>


