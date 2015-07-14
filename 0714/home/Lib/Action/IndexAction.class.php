<?php
//模板替换测试
class IndexAction extends CommonAction{
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

    public function play(){
    	//继承了CommonAction任何方法执行之前都要调用CommonAction里面的初始化方法做
    	//权限控制
    	Say();
    }


}