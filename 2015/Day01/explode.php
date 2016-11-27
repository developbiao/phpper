<?php
header("Conten-Type:text/html;charset=utf-8");
//示例1
$pizza = "piece1, piece2, piece3, piece4, piece5, piece6";
$pieces = explode(',', $pizza); //分割字符串
echo "<pre>";
print_r($pieces);
echo "</pre>";
echo "<hr />";
//示例2
$data = "foo:*:1023:1000::/home/foo:/bin/bash";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(':', $data);

echo $user;
echo "<br/>";
echo $pass;

// 示例3
echo "<br/>";
$str = 'one|two|three|four';

//正数的limit
echo "<pre>";
print_r(explode('|', $str, -3));
echo "</pre>"
?>