<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>显示用户列表</title>
<style type="text/css">
table{
	border:1px solid green;
	background:#ccc;
}
</style>
<?php
require('./include/init.php'); //导入初始化文件
$mysql = mysql::getIns();
$list = $mysql->getAll('select * from test');
?>
<body>
	<table>
		<tr>
			<td>列1</td>
			<td>列2</td>
		</tr>
		<?php foreach($list as $v){?>
		<tr>
			<td><?php echo $v['t1'];?></td>
			<td><?php echo $v['t2'];?></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>
