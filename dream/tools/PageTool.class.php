<?php
/*
@Describe:分页类
@Author:GongBiao
@Date:2015/07/06
*/
/*
分页类笔记思路学习：
设：共有5个商品，每页显示2条

问：共几页
答：3页，页数是整数

问：第一页显示第几条到第几条
答: 1-2条

问：第二页显示第几条到第几条
答：3-4条，最后一页只有一条第5商品

总结：
1、分页的原理3个变量
总条数：$total
每页条数: $perpage
当前页：$page


2、分页两个公式
总页数:$count = ceil($total / $perpage); 向上取整

第$page页，显示第几条到第几条？(offset---limit)
答：第$page页，说明前面已经跳过了$page - 1 页了，每页又是$perpage条
跳过了($page - 1) * $perpage条
即从第($page -1) * $perpage + 1 条开始取，取$perpage条出来

[offset---->($page - 1) * $perpage + 1 , $pepage<-----limit]


分页导航生成
示例：
index.php
index.php?cat_id=3
index.php?cat_id=3&page=1
index.php?page=1


分页导航里
[1] [2] [3] [4] [5]
page 导航里，应该根据页码来生成，但同时不能把传过来的参数搞丢了，如cat_id

所以我们先把地址栏取出并保存起来

*/

defined('ACC') || exit('ACC Denied');

class PageTool{
	protected $total = 0; //总条数
	protected $perpage = 10; //默认每页条数
	protected $page = 3; // 默认当前页


	//初始化构造器调用参数并判断
	public function __construct($total, $page=false, $perpage=false){
		$this->total = $total;
		if($perpage){
			$this->perpage = $perpage;
		}

		if($page){
			$this->page = $page;
		}
	}


	//核心函数，创建分页导航

	public function show(){
		$count = ceil($this->total / $this->perpage); //计算总页数		
		$uri = $_SERVER['REQUEST_URI']; //获取用户传过来的uri路径与参数

		$parse = parse_url($uri); //获取路径与参数到数组


		$param = array();
		if(isset($parse['query'])){ //获取uri参数保存到数组$param
			parse_str($parse['query'], $param);
		}




		//不管$param数组里面有没有page单元，都usnet一下，确保没有page单元
		//即保存除page之外的参数(单元)

		unset($param['page']);


		//拼接url
		$url = $parse['path'] . '?';
		if(!empty($param)){
			$param = http_build_query($param); //把单元用'&拼接到字符串
			$url .= $param . '&';
		}


		//关键点计算生成页码导航

		$nav = array(); //准备存储url
		$nav[] = '<span class="page_now">' . $this->page . '</span>';

		for($prev = $this->page - 1, $next = $this->page + 1; ($prev>=1 || $next<=$count) && count($nav) <= 5;){

			if($prev >= 1){ //压入数组首部
				array_unshift($nav, '<a href="' . $url . 'page=' . $prev . '">[' . $prev . ']</a>');
				$prev -= 1;
			}
			if($next <= $count){ //压入数组尾部
				array_push($nav, '<a href="' . $url . 'page=' . $next . '">[' . $next . ']</a>');
				$next += 1;
			}

		}
		/*
		echo '<pre>';
		print_r($nav);
		echo '</pre>';
		exit;
		*/


		return implode('', $nav);

	}


}



?>