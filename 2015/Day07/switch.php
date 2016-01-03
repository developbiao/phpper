<?php
header('Content-Type:text/html; charset=utf-8');

$today = 2;
switch($today){
	case 1:
		echo "今天是星期一";
		break;
	case 2:
		echo "今天是星期二";
		break;
	case 3:
		echo "今天是星期三";
		break;
	case 4:
		echo "今天是星期四";
		break;
	case 5:
		echo "今天是星期五";
		break;
	case 6:
		echo "今天是星期六";
		break;
	case 7:
		echo "今天是星期日";
		break;
	default:
		echo "你来至火星";
}
?>
