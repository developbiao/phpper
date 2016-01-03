<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/bootstrap.min.css">
	<script src="__PUBLIC__/Js/jquery.min.js"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/Js/holder.min.js"></script>
	<script src="__PUBLIC__/Js/application.js"></script>

	<style>
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>查看用户</h4>				
			</div>	
			<div class="panel-body">
				<table class='table table-bordered table-hover table-striped'>
					<tr>
						<th>ID</th>
						<th>用户名</th>
						<th>注册时间</th>
						<th>修改</th>
						<th>删除</th>
					</tr>
					<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($row[id]); ?></td>
							<td><?php echo ($row[username]); ?></td>
							<td><?php echo (date('Y-m-d',$row[time])); ?></td>
							<td><a href="<?php echo U('edit');?>/id/<?php echo ($row['id']); ?>">修改</a></td>
							<td><a href="<?php echo U('delete');?>/id/<?php echo ($row['id']); ?>">删除</a></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>	
				
				<?php echo ($show); ?>
			
			</div>
			
		</div>
	</div>
</body>
</html>