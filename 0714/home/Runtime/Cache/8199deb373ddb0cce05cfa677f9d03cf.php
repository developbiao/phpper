<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html"/>
	<title>index</title>
</head>
<body>
	<h3>用户信息</h3>
	<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><h1><?php echo ($row['id']); ?>---<?php echo ($row['user']); ?>----<?php echo ($row["passwd"]); ?></h1><?php endforeach; endif; ?>
</body>
</html>