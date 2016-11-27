<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/bootstrap.min.css">
	<script src="__PUBLIC__/Js/jquery.min.js"></script>
	<script src="__PUBLIC__/Js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/Js/holder.min.js"></script>
	<script src="__PUBLIC__/Js/application.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3>添加用户</h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo U('insert');?>" method='post'>
					<div class="form-group">
						<label for="">用户名:</label>	
						<input type="text" name='username' class='form-control' placeholder='username'>
					</div>

					<div class="form-group">
						<label for="">密码</label>
						<input type="password" name='password' class="form-control" placeholder='password'>
					</div>

					<div class="form-group">
						<input type="submit" value="添加" class="btn btn-primary btn-lg">
						<input type="reset" value="取消" class="btn btn-default btn-lg">
					</div>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>