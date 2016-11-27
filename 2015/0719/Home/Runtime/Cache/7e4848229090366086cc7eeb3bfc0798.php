<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>Index</title>
</head>
<body>
	<h3>Index/index</h3>
	<h3>文件上传</h3>
	<hr/>
	<form action="__URL__/upload" method="post" enctype="multipart/form-data">
		<!--<p><input type="file" name="img"/></p>-->
		<!-- 多文件上传 -->
		<p><input type="file" name="img[]"/></p>
		<p><input type="file" name="img[]"/></p>
		<p><input type="file" name="img[]"/></p>
		<p><input type="submit"  value="提交"/></p>
	</form>
</body>
</html>