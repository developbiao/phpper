<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>Index</title>
</head>
<body>
	<h3>Index/index</h3>
	<h3>欢迎来到梦想之城!</h3>
	<?php if(is_array($rows)): foreach($rows as $key=>$val): if($val["username"] == $_SESSION['username']): ?><h3><?php echo ($val['username']); ?></h3><?php endif; endforeach; endif; ?>
	<hr/>
	<h1><a href="__APP__/Login/logout">退出</a></h1>
</body>
</html>