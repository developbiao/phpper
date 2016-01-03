<?php
/*
@Describe:从数据库中取出当天的lesson解决方案01
*/
require('rb.php');
R::setup('mysql:host=localhost;dbname=woogi0_1', 'root', '123456');

$list = R::getAll("SELECT lesson, count(*) AS total, DATE_FORMAT(ndate, '%Y-%m-%d') AS day FROM `weanswer` 
where ndate BETWEEN '2015-06-01' and '2015-06-04' and type='question' 
AND lesson in('1', '2', '3', '4', '5', '6', '7', '8', '9')
GROUP BY DATE_FORMAT(ndate, '%Y-%m-%d'), lesson 
order by ndate desc;
");

$dates = [
'2015-06-01',
'2015-06-02',
'2015-06-03',
'2015-06-04',
'2015-06-05',
'2015-06-06',
'2015-06-07',
'2015-06-08',
'2015-06-09',
'2015-06-10',
'2015-06-11',
'2015-06-12',
'2015-06-13'
];

$lesson = 9;
$result = array();

/*
for($i=1; $i<=9; $i++){
	$key = sprintf("lesson%s", $i); //lesson
	foreach($dates as $day){
		$result[$key][$day] = 0; //数据初始化为0
		foreach($list as $ele){
			if($ele['day'] == $day && $ele['lesson'] == $i){
				$result[$key][$day] = $ele['total'];
			}
		}
	}
}
*/

for($i=1; $i<=9; $i++){
	$key = sprintf("lesson%s", $i); //lesson
	foreach($dates as $day){
		$result[$key][] = 0; //数据初始化为0
		foreach($list as $ele){
			if($ele['day'] == $day && $ele['lesson'] == $i){
				$result[$key][] = $ele['total'];
			}
		}
	}
}






echo '<pre>';
print_r($result);
echo '</pre>';

echo '<h3>Program runing is ok!</h3>';

?>