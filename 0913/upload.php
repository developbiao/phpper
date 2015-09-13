<script src="jquery.js"></script>
<?php
$imgsrc = $_FILES['imgname']['tmp_name'];
$imgdst = $_FILES['imgname']['name'];

if(move_uploaded_file($imgsrc, iconv("UTF-8", "gb2312", $imgdst))){
	$img="<img src=\"$imgdst\">";
	//echo "<script>obj=top.document.getElementById('uploadimg');</script>";
	//echo '上传成功!';
	echo "<script>var obj=top.document.getElementById('uploadimg'); $(obj).append('{$img}'); top.document.getElementById('hid').value='$imgdst'</script>";
}else{
	echo '上传失败!';
}
?>