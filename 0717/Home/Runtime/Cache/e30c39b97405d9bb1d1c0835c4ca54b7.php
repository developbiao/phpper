<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>index</title>
</head>
<body>
	<h1>查看用户</h1>
	<hr>
	<table width='500px' border='1px' cellspacing='0'>
			<tr>
				<td>ID</td>
				<td>用户名</td>
			</tr>
		<?php if(is_array($rows)): foreach($rows as $key=>$val): ?><tr>
				<td><?php echo ($val["id"]); ?></td>
				<td><?php echo ($val["username"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<h3><?php echo ($time); ?></h3>


</body>
</html>