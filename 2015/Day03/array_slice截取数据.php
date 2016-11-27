<?
header("Content-Type:text/html; charset=utf-8");
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"


// note the differences in the array keys
echo "<pre>";
print_r(array_slice($input, 2, -1));
echo "</pre>";
//print_r(array_slice($input, 2, -1, true)); //返回原来的数据位置的数组

?>


