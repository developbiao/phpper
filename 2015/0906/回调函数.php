<?php
//匿名函数(Anonymous functions)
echo preg_replace_callback('~-([a-z])~', function ($match){
	return strtoupper($match[1]);
}, 'hello-world');
//输出helloworld
?>

