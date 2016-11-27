<?php
/*
*@Describe:IndexAction
*@Author:GongBiao
*@Date:2015/07/17
*/
class IndexAction extends Action {

	public function index(){
		
	}

	//模板继承测试demo06
	public function demo06(){
		$user = M('User');
		$this->rows = $user->select();
		echo '<pre>';
		$this->display('demo');
	}
	public function show(){
		$class = M('Class');
		$this->rows = $class->select();

		$this->display('class');
	}

	//模板继承
	public function news(){
		//一些内容news

		$this->display();


	}

	//layout模板测试
	public function test(){
		$this->display('test', 'utf-8', 'text/html');

	}


	public function demo05(){

		$user = M('User');
		$this->rows = $user->order('id')->select();

		$this->display('show', 'utf-8', 'text/html');
	}



	//IP定位测试
	public function demo04(){
		import('ORG.Net.IpLocation');
		$Ip = new IpLocation('qqwry.dat');
		$cip = get_client_ip();
		$data =  $Ip->getlocation($cip); //获取IP地址信息
		$this->ips = $data['area'];
		echo $data['area'];
		exit;
		/*
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		*/

		$this->display('show', 'utf-8', 'text/html');
	}
	
	//判断操作	
	public function demo03(){
		$this->assign('a', 11);
		$this->assign('b', 1993);
		$this->assign('say', '今天做了个美梦，非常的开心！');
		$this->assign('c', 5);
		$this->display();
	}

	//变量分配测试
	public function demo02(){
		define('HOSTNAME', 'http://www.google.com');
		$this->assign('name', 'user123');
		$this->assign('time', time());
		//$this->display('User:index');//输出到模块下的index
		//$str =  $this->fetch('show'); //存储起来
		//echo "<script type='text/javascript'>alert(".$str.")</script>";

	}


	//关联查询测试01
    public function demo01(){
    	$user = D('User');
    	$rows = $user->relation(true)->select();
    	echo '<pre>';
    	print_r($rows);
    	echo '</pre>';

    }

}