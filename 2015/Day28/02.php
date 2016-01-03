<?php
header('Content-Type:text/html; charset=utf-8');
/*
1、提交后，文件自动发到服器上，形成一个临时文件
2、在服务器上，只需要把临时文件移动到自己想放的位置
3、PHP形成临时文件后，还会形成一个$_FILES超全局数组$_FILES
*/

echo '<pre>';
print_r($_FILES);
echo '</pre>';

/*
如何移动上传后的临时文件
使用move_uploaded_file()函数
*/

/*
这个文件在.php文件运行结束后消失
*/
if(move_uploaded_file($_FILES['pic']['tmp_name'], './'.$_FILES['pic']['name'])){

	echo '上传文件成功';

}else{
	echo '上传文件失败';
}
?>