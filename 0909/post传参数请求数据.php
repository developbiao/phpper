<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>index</title>
<script src="./jquery.js"></script>
<script type="text/javascript">
$(document).ready(function (){
	$("#btn").click(function (){
		$.post("index.php", {"id":"0"}, function (data){
			$("body").append(data);
		});
	});
});
</script>
</head>
<body>
	<img src="" alt="图片" />
	<button id="btn">请求图片</button>
</body>
</html>
