<?php
/*
@Description:把变量写到文件中
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');
$user = '<?php user="user3"?>';
file_put_contents('user.php', $user);


echo '<h3>程序运行完成!</h3>';
?>
