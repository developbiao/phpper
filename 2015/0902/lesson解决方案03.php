<?php
/*
@describe:从数据库中取出当天的lesson解决方案01
*/
require('rb.php');
r::setup('mysql:host=localhost;dbname=woogi0_1', 'root', '123456');

$list = R::getAll("SELECT lesson, count(*) AS total, DATE_FORMAT(ndate, '%Y-%m-%d') AS day FROM `weanswer` 
where ndate BETWEEN '2014-06-01' and '2015-06-04' and type='question' 
AND lesson in('1', '2', '3', '4', '5', '6', '7', '8', '9')
GROUP BY DATE_FORMAT(ndate, '%Y-%m-%d'), lesson 
order by ndate desc;
");


 function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/y' )
    {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);

        while( $current <= $last )
        {
            $dates[] = date($output_format, $current);
            $current = strtotime($step, $current);
        }

        return $dates;
    }

$date_start = '2014-06-01';
$date_end = '2015-06-04';
$dates = date_range($date_start, $date_end, '+1 day', 'Y-m-d');

$lesson = 9;
$result = array();


for($i=1; $i<=9; $i++){
	$key = sprintf("lesson%s", $i); //lesson
	foreach($dates as $day){
		$result[$key][$day] = 0; //数据初始化为0
		if(!empty($list)){
		foreach($list as $ele){
			if($ele['day'] == $day && $ele['lesson'] == $i){
				$result[$key][$day] = $ele['total'];
			}
		}
		}else{
			$return[$key][$day] = 0;   //day 可以在项目去掉
		}
	}

}






echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr>';

/*
echo '<pre>';
print_r($list);
echo '</pre>';
*/

echo '<h3>program runing is ok!</h3>';

?>