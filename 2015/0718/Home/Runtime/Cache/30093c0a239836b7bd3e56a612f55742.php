<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>Login</title>
</head>
<body>
	<h3>用户注册</h3>
	<hr/>
	<form action="__URL__/insert" method="post">
		<table width="300px" border="1px" cellspacing="0" align="center">
			<tr>
				<td>用户名:</td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td>密码:</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td>确认密码:</td>
				<td><input type="password" name="repassword" /></td>
			</tr>
			<tr>
				<td>验证图片</td>
				<td><img src="__URL__/verify" alt=""  align="left"/></td>
			</tr>
			<tr>
				<td>验证码</td>
				<td><input type="text" name="fcode" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="注册" /></td>
				<td><input type="reset" value="重置"/></td>
			</tr>
		</table>
	</form>
</body>
</html>