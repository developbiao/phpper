<?php
/*
@Describe : 无刷新上传图片
@Author:GongBiao
@Date:2016/05/27
*/
$src = $_FILES['img']['tmp_name'];
$file = $_FILES['img']['name'];
$ext = array_pop(explode(',', $file));

$rand = time().mt_rand().'.'.$ext;
$dst = "uploads/{$rand}";
if($_FILES['img']['error'] === 0){
	if(move_uploaded_file($src, $dst)){
		//echo '上传文件成功!';
		echo "<script>var imgid = top.document.getElementById('imgid'); imgid.src='{$dst}'; imgid.style.display='block'</script>";
	}	
}

?>