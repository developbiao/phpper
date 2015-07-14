<?php
//模板替换测试
class IndexAction extends Action {
    public function index(){
    	//echo "<img src='./Public/Images/phptools.jpg'/>";
    	$this->display();
    }
    public function temp(){
    	echo __ROOT__,'<br />';
    	echo __APP__,'<br />';
    	echo __URL__,'<br />';
    	echo __ACTION__,'<br />';
    	echo __PUBLIC__,'<br />';
    	echo __TMPL__,'<br />';
    }
}