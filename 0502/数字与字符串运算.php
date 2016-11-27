<?php
header('Content-Type:text/html; charset=utf-8');
echo 4 + '33hello33';
exit;
$x = 3 + "15%" + "$25";  // 18
echo $x , '<br />';
//上面的代码如果，我们在与字符串进行数学运算，实际php会尽可能将字符串的数字时进行转换，如果是数字开头的话则转换成数字比如"15%"会变成15,如果不是数字开头则会变成0；上面的运算类似下面
//$x = 3 + 15 + 0
echo '<h3>Program runing is ok!</h3>';
?>
