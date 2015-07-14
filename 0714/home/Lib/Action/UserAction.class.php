<?php
/*
*@Describe:UserAction
*@Author:GongBiao
*@Date:2015/07/14
*/
class UserAction extends Action {
    public function User(){
    	$this->assign('user', 'Marry');
    	$this->display();
    }

    public function show(){
 
    	echo C('username');
    	echo C('TMPL_R_DELIMT');
    }
}
?>