<?php
class UserAction extends CommonAction{

	//查看用户
	public function index(){
		import('ORG.Util.Page');
		$user = M('User');
		$count = $user->count(); //计算总数
		$page = new Page($count, 5);
		$page->setConfig('header', '个会员');
		$page->setConfig('theme', '%totalRow% %header% %upPage% %downPage% %nowPage%/%totalPage%页'); //配置分页主题
		$this->assign('show', $page->show()); //显示分页导航
		$this->rows = $user->limit($page->firstRow,$page->listRows)->order('id')->select();
		$this->display();

	}

	//添加用户
	public function add(){
		$this->display();
	}


	//插入
	public function insert(){
		$user = M('User');
		$user->create();
		$user->password=md5($_POST['password']);
		$user->time = time();
		if($user->add()){
			$this->success('添加成功!', U('index'));
		}

	}


	//修改编辑
	public function edit(){
		$user = M('User');
		$id = $_GET['id'];
		$this->row=$user->find($id);
		$this->display();

	}

	public function update(){
		$user = M('User');	
		$user->create();
		$user->password = md5($_POST['password']);
		if($user->save()){
			$this->success('修改成功!', U('index'));
		}

	}

	public function delete(){
		$id = $_GET['id'];
		$user = M('User');
		if($user->delete($id)){
			$this->success('删除成功', U('index'));
		}

	}
}
?>