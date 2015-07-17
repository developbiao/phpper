<?php
return array(
	//'配置项'=>'配置值'
	'LAYOUT_ON' => false,
	'HTML_CACHE_ON' => true,
	'HTML_CACHE_RULES' => array(
		'*'=>array('{$_SERVER.REQUEST_URI|md5}', 10) //设置静态缓存
		)
);
?>