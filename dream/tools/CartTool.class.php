<?php
/*
@Describe:购物车工具类
@Author:GongBiao
@Date:2015/07/04
*/
header('Content-Type:text/html; charset=utf-8');

/*
思路：
1、无论在本网站新刷新了多少次页面，或者新增加了多少商品，
都要求查看购物车时结果一样
即：打开A商品刷新,B商品刷新，首页，看到购物车应该是一样的
---购物车全局有效

解决方案：可以把信息放数据库、cookie、session里面


2、既然是全局有效，暗示，购物车的实例只能有1个
不能说在3个页面，买了3个商品，就形成了3个购物车实例，这显然不合理

解决：单例模式

技术选择:session + 单例
*/

/*
功能分析:

判断某个商品是否存在
添加商品
删除商品
修改商品的数量

某商品数量加1
某商品数量减1

查询购物车的商品种类
查询购物车的商品数量
查询购物车的商品总金额
返回购物车里的所有商品

清空购物车
*/

//defined('ACC') || exit('ACCDend');
session_start();

class CartTool {
	private static $ins = null;
	private $items = array(); //用于装购物车里面的东西
	public $sign = 0; //检查是不是同一个实例标识


	//保护不让实例化
	final protected function __construct(){
		$this->sign = mt_rand(1, 10000);
	}

	//保护不让clone
	final protected function __clone(){

	}


	//获取实例--单例模式

	protected static function getIns(){
		if(!(self::$ins instanceof self)){
			self::$ins = new self();
		}
		return self::$ins;
	}


	/*
	@describe:把购物车的单例对象放到session到里
	@Params:void
	@return array
	*/
	public static function getCart(){
		if(!isset($_SESSION['cart']) || !($_SESSION['cart'] instanceof self)){
			$_SESSION['cart'] = self::getIns();
		}

		return $_SESSION['cart'];
	}

	/*
	@decribe:添加添加
	@params int $id 商品主键
	@params string $name 商品名称
	@params float $price 商品价格
	@parasm int $num 商品数量
	*/

	public function addItem($id, $name, $price, $num=1){
		if($this->hasItem($id)){ //如果商品已存在了，则直接加其数量
			$this->incNum($id, $num);
			return 0;
		}

		$item = array();
		$item['name'] = $name;
		$item['price'] = $price;
		$item['num'] = $num;

		$this->items[$id] = $item;

	}


	/*
	@describe:修改购物车中的商品数量
	@params:int $id 商品主键
	@params: int $num 某个商品修改后的数据，即 直接把某商品的数量改$num
	@return bool/$num
	*/

	public function modNum($id, $num){
		if(!$this->hasItem($id)){
			return false;
		}

		$this->items[$id]['num'] = $num;

	}

	/*
	@describe:商品数量增加1
	@prams:int $id;
	@params: int $num
	@return void
	*/

	public function incNum($id, $num = 1){
		if($this->hasItem($id)){
			$this->items[$id]['num'] += $num;
		}
	}

	/*
	@describe:商品数量减1
	@prams:int $id;
	@params: int $num
	@return void
	*/

	public function decNum($id , $num=1){
		if($this->hasItem($id)){
			$this->items[$id]['num'] -= $num;
		}

		//如果减少后，数量为0了，则把这个商品从购物车删掉
		if($this->items[$id]['num'] < 1){
			$this->delItem($id);
		}
	}

	/*
	@describe:判断某个商品是否存在
	@params int $id
	@return bool
	*/

	public function hasItem($id){
		return array_key_exists($id, $this->items);
	}

	/*
	@describe:删除商品
	@params: int $id
	@return void
	*/

	public function delItem($id){

		unset($this->items[$id]);

	}


	/*
	@describe:查询商品的种类
	@return int $num;
	*/

	public function getCnt(){
		return count($this->items);
	}

	/*
	@describe:查询购物车中的商品的个数
	@return int $num;
	*/

	public function getNum(){
		if($this->getCnt() == 0){
			return 0;
		}

		$sum = 0;

		foreach($this->items as $item){
			$sum += $item['num'];
		}

		return $sum;
	}

	/*
	@describe:计算购物车中商品的总金额
	@return int $pritce;
	*/

	public function getPrice(){
		if($this->getCnt() == 0){
			return 0;
		}

		$price = 0.0;

		foreach($this->items as $item){
			 $price += $item['num'] * $item['price']; //数量 * 价格
		}

		return $price;
	}


	/*
	@describe:返回购物车中的所有商品
	@return: array items
	*/

	public function all(){
		return $this->items;
	}

	/*
	@descibe:清空购物车
	@return:void
	*/

	public function clear(){
		$this->items = array();
	}
}


/*
$cart = CartTool::getCart();

if($_GET['test'] == 'addmq'){
	$cart->addItem(1 ,'麻雀', 15);
	echo 'ok!';
}else if($_GET['test'] == 'addwg'){
	$cart->addItem(2 ,'鳄鱼', 788);
	echo '添加了一只鳄鱼ok!';

}else if($_GET['test'] == 'addcz'){
	$cart->addItem(3 ,'虫子', 3.5);
	echo '添加了一只虫子ok!';

}else if($_GET['test'] == 'clear'){
	$cart->clear();
	echo '清空购物车呼呼!';

}else if($_GET['test'] == 'add'){
	$cart->incNum(1);
	echo '+添加了一麻雀ok!';

}else if($_GET['test'] == 'dec'){
	$cart->decNum(1);
	echo '-添加了一麻雀ok!';

}else if($_GET['test'] == 'del'){
	$cart->delItem(3);
	echo '移除蚊子!';

}else if($_GET['test'] == 'mod'){
	$cart->modNum(1, 33);

}else{
echo '<pre>';
print_r($cart->all());
echo '</pre>';
echo "<h3>总共有{$cart->getCnt()}个种类</h3>";
echo "<h3>总共有{$cart->getNum()}个商品</h3>";
echo "<h3>总共{$cart->getPrice()}元人民币</h3>";
echo '<h3>程序测试完成!</h3>';
//echo session_save_path();
}
*/

?>