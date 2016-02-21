<?php
/*
@Describe:测试百分比落点测试
@Author:GongBiao
@Date:2016/02/21
*/
header('Content-Type:text/html; charset=utf-8');

for($i=1; $i<=100; $i++){
	$number = getExp($i);
	printf("level is %s \t experience is %s\n", $i, $number);
}

function getExp($level)
    {
        if($level < 1)
            return 0;

        $xp_in_float = 0;
        for($i = 1; $i<=$level; $i++)
        {
            $level_up_param = 20;
            $xp_in_float += (pow($i - 1, 3.0) + $level_up_param) / 5.0 * (($i - 1) * 2.0 + $level_up_param);
            $xp_in_float = floor($xp_in_float);
        }
        return $xp_in_float;
    }

?>
