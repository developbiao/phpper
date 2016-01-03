<?php
header('Content-Type:text/html; charset=utf-8');
$search_array = array('first' => 1, 'second' => 4);
if(array_key_exists('first', $search_array)){
	echo "The 'first' element is in the array";
}
echo '<h3>Programe runing is ok!</h3>';
?>
