<?php
header('Content-Type:text/html; charset-utf-8');
// 制作传统分布效果，连接数据库、获得数据、分页显示
$link = mysql_connect('localhost:3306', 'root', '123456');
mysql_select_db('demo', $link);
mysql_query('set names utf8');

// 实现数据分页
//1.引入分页类
include("./page.class.php");

//2.获得总记录条数
$sql = "SELECT * FROM goods";
$qry = mysql_query($sql);
$total = mysql_num_rows($qry);
$per = 5;

//3.实例化分页类对象
$page_obj = new Page($total, $per);


//4.制作sql语句,获得每页信息
$sql = "SELECT goods_id, goods_name, goods_number, shop_price, click_count FROM goods " . $page_obj->limit;
$qry = mysql_query($sql);

//5.获得页码列表
$pagelist = $page_obj->fpage();

echo <<<eof
<style type="text/css">
 table{
 	width:700px;
 	height:auto;
 	border:1px solid black;
 	border-collapse:collapse;
 }
 td{
 	border:1px solid black;
 }
</style>
<center>
<h3>传统分页效果的使用</h3>
<table>
	<tr><td>ID</td><td>Name</td><td>Prices</td><td>Amount</td><td>Click_Count</td></tr>
eof;

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$num = ($page - 1) * $per ;
while($rst = mysql_fetch_assoc($qry)){
	echo "<tr>";
	echo "<td>".++$num."</td>";
	echo "<td>{$rst['goods_name']}</td>";
	echo "<td>{$rst['shop_price']}</td>";
	echo "<td>{$rst['goods_number']}</td>";
	echo "<td>{$rst['click_count']}</td>";
	echo "</tr>";
}
echo "<tr><td colspan='5'>$pagelist</td></tr>";
echo "</table></center>";

echo '<h3>Program runing is ok!</h3>';
?>