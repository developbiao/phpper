<?php
	function a_test($str){
		echo "\nHi:$str";
		echo '<pre>';
		var_dump(debug_backtrace());
		echo '</pre>';
	}

	a_test('friend');
?>
