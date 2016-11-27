<?
header("Content-Type:text/html; charset=utf-8");
$str = "老谷";
$$str = "李骏";
echo $str;
echo "<br>";
echo $$str;
echo "<br>";
echo $老谷;  //这里输出的结果是“李骏”这就是可变变量
?>

