<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	/*
    	通过GET获取模块和操作
		echo '<pre>';    
		print_r($_GET);
		echo '<pre>';    
		*/
		//获取模块和操作常量
		/*
		echo MODULE_NAME,'<br />';
		echo ACTION_NAME;
		*/
	    //success error跳转
    	//$this->success('yes', 'Say', 5); //这样访问会有路径不全的问题找不到模块
    	$this->success('yes', U('Say'), 5); //使用在U来解决



    }

    public function test(){
    	$this->display('test');
    }

    public function show(){
    	//echo 'Index/show';
    	//echo __INFO__;
    	//echo __EXT__; //获取后缀

    	//echo U('Say', '', 'aps', 1);//加了第四个参数跳转了

    	//重定向redirect
    	$this->redirect('Test/demo', '', 10, '页面跳转中~'); //10秒后跳转
    }


    //自定义跳转到站外
    public function test1(){
    	echo  "<script>location='http://www.baidu.com'</script>";
    }

    public function test2(){
    	$this->error('错了吧', U('Say'), 5);
    }

    public function Say(){

    	$this->assign('tel', '18828077952');
    	$this->display();
    }

    public function _empty(){
    	//echo '<h1>您'.ACTION_NAME.'操作的方法存在哦~</h1>';
    	$this->myerror();
    }

    public function myerror(){
    	$this->display('myerror');
    }

}