<?php
header('Content-Type:text/html;charset=utf-8');
// 制作传统分页效果,连接数据库、获得数据分页显示
$link = mysql_connect('localhost:3306', 'root', '123456');
mysql_select_db('demo', $link);
mysql_query('SET names utf8');

// 实现数据分页
//[1]、引入分页类
include("./page.class.php");

//[2]、获得总条数
$sql = "SELECT * FROM goods";
$qry = mysql_query($sql);
$total = mysql_num_rows($qry);
$per = 3; //每页显示的个数

//[3]、 实例化分页类
$page_obj = new Page($total, $per);

//[4]、 制作sql语句，获得每页信息
$sql = "SELECT goods_name, goods_number, market_price, goods_sn FROM goods " . $page_obj->limit;
$qry = mysql_query($sql);

//[5]、 获得页码列表
$pagelist = $page_obj->fpage(array(3,4,5,6,7,8));
echo <<<eof
<style type="text/css">
table{
	width:700px;
	margin:auto;
	border:1px solid black;
	border-collapse:collapse;
}
td{
	border:1px solid black;
}
</style>
<table>
<tr>
	<td>序号</td>
	<td>名称</td>
	<td>价格</td>
	<td>数量</td>
	<td>商品SN</td>
</tr>
eof;

$p = isset($_GET['page']) ? $_GET['page'] : 1;
$num = ($p - 1) * $per;

while($rst = mysql_fetch_assoc($qry)){
	echo '<tr>';	
	echo '<td>' . ++$num . '</td>';
	echo '<td>' . $rst['goods_name'] . '</td>';
	echo '<td>' . $rst['market_price'] . '</td>';
	echo '<td>' . $rst['goods_number'] . '</td>';
	echo '<td>' . $rst['goods_sn'] . '</td>';
	echo '</tr>';
}

echo "<tr><td colspan='5'>$pagelist</td></tr>";
echo '</table>';


?>
