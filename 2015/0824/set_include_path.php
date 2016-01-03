<?php
	set_include_path(dirname(__FILE__));
	/*

		//预定义好include_path的目录
	    set_include_path("123/");
          include("test1.php");
          include("test2.php");
          include("test3.php");
          require("test4.php");
          require("test5.php");
	*/
	$include_value = ini_get('include_path');
	//echo $include_value;
	echo get_include_path();
?>
