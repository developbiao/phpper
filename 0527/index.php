<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<titel>index</title>
	<style type="text/css">
		#div1{
			width:500px;
			height:500px;
			margin:0 auto;
		}
		#div1>img{
			width:300px;
			height:300px;
			display:none;
		}
	</style>
	<script type="text/javascript">
		//自动提交上传图片
		function uploadFile(id)
		{
			//选中form表单让它提交
			var oForm = document.getElementById(id);
			oForm.submit();

		}
	</script>
</head>
<body>
	<h3>
		<?php
			echo "当前时间戳:" . time();
		?>
	</h3>
	<form action="upload.php" method="post" target="mywin" id="myform" enctype="multipart/form-data">
		<p>文件上传</p>
		<p>
			<input type="file" name="img" id="input_upload" onchange="uploadFile('myform');" />
		</p>
		<p>
			<!-- <input type="submit" value="ok" /> -->
		</p>
		<hr>
		<div id="div1">
			<img id="imgid" alt="" />
		</div>
	</form>
	<iframe name="mywin" frameborder="1" src='' style="display:none"></iframe>
</body>
</html>