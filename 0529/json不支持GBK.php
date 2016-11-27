<?php
$data = array(
	'id' => 1,
	'name' => 'gongbiao'
	);

//echo json_encode($data);

//字符串的转换函数
// iconv('UTF-8' ,'GBK' , $data);
$data = '输出json数据';
$new_data = iconv('UTF-8', 'GBK', $data);
echo $new_data;
//echo json_encode($new_data);

?>
