<?php
header('Content-Type:text/html; charset=utf-8');
/*
接口的应用场景
*/

//接口更加的抽象

interface UserBase{
	public function login($user, $password);
	public function logout($id);
}

interface ChatGame{
	//喝水
	public function drinking();

	//chat
	public function  chat();

	//walk
	public function walk();

	//playgame
	public function playgame($id, $user_id);

}


//woogi实现了上面的功能

class woogi implements UserBase, ChatGame{
	//login
	public function login($user, $password){
		echo $user,'---login success!<br />';
	}


	//logout
	public function logout($id){
		echo $id,'---logout success!<br />';
	}


	//chat
	public function chat(){
		echo '我们一起愉快的玩耍吧!<br />';
	}

	//walk
	public function walk(){
		echo '我们一起去走走吧!<br />';
	}


	//playgame
	public function playgame($id, $user_id){
		echo '一起玩贪吃蛇的游戏!打电动！<br />';
	}

	//drinking
	public function drinking(){
		echo '百事可乐真的很好喝!<br />';	
	}

}


$caiyuan = new Woogi();
$caiyuan->login(13, 88);
$caiyuan->drinking();
$caiyuan->chat();
$caiyuan->walk();
$caiyuan->playgame(1, 2);
$caiyuan->logout(1);



?>