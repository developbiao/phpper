<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>Base模板</title>
<style type="text/css">
div{
	margin:0 auto;
	width:500px;
	height:200px;
	background:#ccc;
	margin-bottom:20px;
}
</style>
</head>
<body>
	<center>
		<h3>BBC最大中文站点</h3>
	</center>
	<div>
		
	<?php if(is_array($rows)): foreach($rows as $key=>$val): ?><h3>--<?php echo ($val["id"]); ?>---<?php echo ($val["username"]); ?>---</h3><?php endforeach; endif; ?>

	</div>
	<div>
		
	</div>
	<div>
		
	</div>
</body>
</html>