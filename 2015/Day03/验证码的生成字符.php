<?
header("Content-Type:text/html; charset=utf-8");
//准备文字
$strarr = array_merge(range(0,9), range(a, z), range(A,Z));
shuffle($strarr);
echo "<pre>";
print_r($strarr);
echo "</pre>";

$str = join('', array_slice($strarr, 0, 4));



echo '<h3>'+$str+'</h3>';
?>