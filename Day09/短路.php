<?php
header('Content-Type:text/html; charset=utf-8');

$house = false;
$car = true;
$b = 3;
if($house && ($b = 6)){ //被短路没机会执行
	echo '嫁';

}else{
	echo '不嫁';
}

if($house | ($b = 6)){
}


echo $b;

?>

