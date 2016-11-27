<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>Index</title>
</head>
<body>
	<h3>Index/index</h3>
	<h3>遇见你真好!</h3>
	<hr/>
	<table width="500px" border="1px" cellspacing="0"/>
	<tr>
		<td>学号</td>
		<td>姓名</td>
	</tr>
	<?php if(is_array($rows)): foreach($rows as $key=>$val): ?><tr>
			<td><?php echo ($val["id"]); ?></td>
			<td><?php echo ($val["username"]); ?></td>
		</tr><?php endforeach; endif; ?>
	<table>
		<h3><?php echo ($show); ?></h3>
</body>
</html>