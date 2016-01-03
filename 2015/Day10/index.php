<?php
header("content-type:text/html; charset=utf-8");

//无限级分类练习
$area = array(
	array('id'=>'1', 'area'=>'北京', 'pid'=>'0'),
	array('id'=>'2', 'area'=>'四川省', 'pid'=>'0'),
	array('id'=>'3', 'area'=>'成都市', 'pid'=>'2'),
	array('id'=>'4', 'area'=>'资阳市', 'pid'=>'2'),
	array('id'=>'5', 'area'=>'雅安市', 'pid'=>'2'),
	array('id'=>'6', 'area'=>'石棉县', 'pid'=>'5'),
	array('id'=>'7', 'area'=>'芦山县', 'pid'=>'5'),
	array('id'=>'8', 'area'=>'天全县', 'pid'=>'5'),
	array('id'=>'9', 'area'=>'汉源县', 'pid'=>'5'),
	array('id'=>'10', 'area'=>'美罗乡', 'pid'=>'6'),
	array('id'=>'11', 'area'=>'九乡', 'pid'=>'9'),
	array('id'=>'12', 'area'=>'大树', 'pid'=>'9')
	);

function generateTree($arr, $id, $deep=1){
	static $list = array();
	foreach($arr as $key => $value){
		if($value['pid'] == $id){
			echo str_repeat('|-', $deep).$arr[$key]['area'].'<br />';
			$list[] = $value;
			generateTree($arr,$value['id'], $deep+1);
		}
	}

	return $list;

}


//generateTree($area, 0);
generateTree($area, 2);
//generateTree($area, 0);
echo 'ok';

?>
