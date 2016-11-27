<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" Content="text/html" charset="utf-8"/>
<title>商品添加</title>
<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css"/>
<script src="__PUBLIC__/Js/jquery.min.js"></script>
<script src="__PUBLIC__/Js/bootstrap.min.js"></script>
<script src="__PUBLIC__/Js/holder.min.js"></script>
<script src="__PUBLIC__/Js/application.js"></script>
</head>
<body>
	<div class="container">
		<div class="pannel pannel-primary">
			<div class="panel-heading">
				<h3>商品添加</h3>
			</div>
			<div class="pannel-body">
				<form action="<?php echo U('insert');?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="file" name="img" class="btn btn-danger">
					</div>

					<div class="form-gruop">
						<input type="submit" value="添加" class="btn btn-primary"/>
						<input type="rest" value="取消" class="btn btn-default"/>

					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>