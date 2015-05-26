<?php
header('Content-Type:text/html; charset=utf-8');
/*百钱买百鸡问题*/

/*
for($g=1; $g<100; $g++){
	for($m=1; $m<100; $m++){
		for($x=1; $x<100; $x++){
			if(($g + $m + $x == 100) && ($g * 5 + $m * 3 + $x / 3 == 100)){
				echo '<h3>公鸡:',$g,'&nbsp母鸡:', $m, '&nbsp雏鸡:' , $x;
			}
		}
	}
}
*/

// 优化后的百鸡问题
for($g = 1; $g < 20; $g++){
	for($m = 1; $m < 33; $m++){

		$x = 100 - $g - $m;
		if(($g + $m + $x == 100) && ($g * 5 + $m * 3 + $x / 3 == 100)){

				echo '<h3>公鸡:',$g,'&nbsp母鸡:', $m, '&nbsp雏鸡:' , $x;

		}
	}
}

?>
