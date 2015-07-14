<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>index</title>
<body>
	<!-- 测试a链接 -->
	<!--<p><a href="__URL__/play">Index/play</a></p>-->
	<h3><?php echo U('hellomoto');?></h3>
	<p><a href="<?php echo U('temp');?>">Index/temp</a></p>
	<p><a href="<?php echo U('play','','shtml');?>">Index/play</a></p>
	<p><a href="<?php echo U('play','','asp');?>">Index/play</a></p>
	<p><a href="<?php echo U('play');?>">Index/play</a></p>
	<p><a href="<?php echo U('Login/show');?>">Login/index</a>
	<p><a href="<?php echo U('User/User');?>">User/User</a>
	<br />
	<br />
	<br />
	<br />
	<hr/>
	<h3>__ROOT__</h3>
	<h3>__APP__</h3>
	<h3>__URL__</h3>
	<h3>__ACTION__</h3>
	<h3>__SELF__</h3>
	<h3>__PUBLIC__</h3>
	<h3>../Public</h3>
	<h3>__TMPL__</h3>
	<img src="__ROOT__/Public/Images/phptools.jpg"/>
	<img src="__PUBLIC__/Images/phptools.jpg"/>
</body>
</html>