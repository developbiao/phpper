<?php
header('Content-Type:text/html; charset=utf-8');
$num = 0;
function totalSum($count)
{
	global $num;
	$total = 0;
	for($i=0; $i < count($count); $i++)
	{
		$total += $count[$i];
		$num++;
	}
	return $total;
}

$total = totalSum([10, 20, 30]);
echo "<h3>Loop count is :{$num}</h3>";
echo "<h3>Program runing is ok! total is :{$total}</h3>";

?>
