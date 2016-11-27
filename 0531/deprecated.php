<?php
header('Content-Type:text/html; charset=utf-8');
//deprecated 是最低级的错误
if(ereg('linux', 'linux is very much!', $matches)){
	echo print_r($matches);
}else{
	echo 'noting find';
}

echo '<hr />';
echo mysql_escape_string('\' or 1=1 #');

?>