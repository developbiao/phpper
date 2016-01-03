<?php
/*
@Describe:session
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

//sestion的销毁

session_start();

/*
第一种方法:可以单独某一个单元，把$_SESSION数组里的某一个单元unset掉
unset($_SESSION['username']);
*/


/*
第二种方法:使用数据把“箱子清空”
$_SESSION = array();

*/



/*
第三种方法：利用函数把箱子清空，同第2种方法
 session_unset();
*/


/*
第四种方法:彻底把箱子给毁掉，即文件都没有了
*/

session_destroy();


echo '<h3>kill程序运行完成</h3>';




?>
