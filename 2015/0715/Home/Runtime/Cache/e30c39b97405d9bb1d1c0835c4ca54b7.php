<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>UserIndex</title>
</head>
<body>
	<form action="__URL__/show" method="post">
		<h3>用户登陆</h3>
		<p>用户：<input type="text" name="user" /></p>
		<p>密码:<input type="password" name="passwd" /></p>
		<p><input type="submit" value="提交"/></p> 
	</form>
</body>
</html>