<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<script src="__PUBLIC__/Js/jquery.min.js"></script>
<style type="text/css">
	#main{
		width:500px;
		height:300px;
		background:purple;
	}
</style>
<title>Index</title>
</head>
<body>
	<h3>Ajax测试页面</h3>
	<div id="main">
	</div>
	<button id="btn">点击</button>
</body>
<script type="text/javascript">
//通过Ajax获取数据
$("#btn").click(function(){
	$.post('__URL__/show', function(data){
		//alert(data);
		//$("#main").html(data);
		//alert(data.status);
		//alert(data.info);

		var str = '';
		if(data.status){
			for(var item in data.data){
				str += item + "=> " + data.data[item];
			}

			$("#main").html(str);
		}

	});
});
</script>
</html>