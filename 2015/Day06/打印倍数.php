<?php
/*
作业：打印倍数
*/
$i=1;
 while($i <= 100){
 	if($i % 3==0 && $i % 5==0){
 		echo 'abcde','<br/>';
 	}else if($i % 5 == 0){
 		echo 'Buzz', '<br/>';
 	}else if($i % 3 ==0){
 		echo 'Fizz', '<br/>';
 	}
 	$i++;
 }

?>

