<?php
/*
@Decription:url参数解析测试
@Author:GongBiao
@Date:2015/07/06
*/
header('Content-Type:text/html; charset=utf-8');

$uri = $_SERVER['REQUEST_URI'];
echo "<h3>$uri</h3>"; //输出/dream/test.php?id=3&cat=5&page=3

$parse = parse_url($uri); 
echo '<pre>';
print_r ($parse);
echo '</pre>';
/*
输出
Array
(
    [path] => /dream/test.php
    [query] => id=3&cat=5&page=3
)
*/
$param = array();
parse_str($parse['query'], $param);
echo '<hr>';
echo '<pre>';
print_r ($param);
echo '</pre>';
/*
把参数解析成数组输出
Array
(
    [id] => 3
    [cat] => 5
    [page] => 3
)
*/

unset($param['page']); //把page参数unset

$url = $parse['path'] . '?';
if(!empty($param)){
	$param = http_build_query($param);
	$url = $url . $param;
}

echo '<hr>';

echo "<h3>$url</h3>";

/*
http_build_query把参数合并
输出
/dream/test.php?id=3&cat=5
*/






echo '<h3>程序运行完成!</h3>';

?>
