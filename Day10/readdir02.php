<?php
header('Content-Type:text/html; charset=utf-8');

function printdir($path, $deep=1){
	$dh = opendir($path);
	while(($row = readdir($dh)) !== false){
		if($row == '.' || $row == '..'){
			continue;	
		}
		 echo str_repeat('-|', $deep),$row,'<br />';
		if(is_dir($row)){
			printdir($path.'/'.$row, ++$deep);
		}
	}

	closedir($dh);

}

$path = '.';
printdir($path);

echo 'ok';
?>
