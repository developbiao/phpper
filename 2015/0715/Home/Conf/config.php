<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL' => '1',
	'TMPL_L_DELIMT' => '<{',
	'TMPL_R_DELIMT' => '}>',
	'DEFAULT_MODULE' => 'Index',
	'DEFAULT_ACTION' => 'index',
	'TMPL_EXCEPTION_FILE' => './Public/error.html',
	'URL_ROUTER_ON' => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则

			'news/:id/:name' => 'Test/router',
			'read/:id\d' 	 => 'Test/router'
		)
);
?>