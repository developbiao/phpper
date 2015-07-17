<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>index</title>
</head>
<body>
	<h1>Index/index</h1>
	<!--系统变量 -->
	<h3><?php echo (date('Y-m-d g:i a',time())); ?></h3>
	<h3><?php echo (C("app_satus")); ?></h3>
	<h3><?php echo C('TMPL_L_DELIM');?></h3>
	<h3><?php echo (C("TMPL_R_DELIM")); ?></h3>
	<h3><?php echo (HOSTNAME); ?></h3>
	<h3><?php echo (C("TMPL_L_DELIM")); ?></h3>
	<h3><?php echo (C("TMPL_R_DELIM")); ?></h3>

	<hr />
	<h3>模板函数测试</h3>
	<h3><?php echo (substr(strtoupper($name ),0, 4)); ?></h3>
	<h3><?php echo substr(strtoupper($name), 0, 4);?></h3>
	date('Y-m-d H:i:s', time());
	<h3><?php echo (date('Y-m-d H:i:s', $time)); ?></h3>
	<h3><?php echo date('Y-m-d H:i:s', time());?></h3>
</body>
</html>