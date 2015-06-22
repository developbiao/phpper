<?php
//CateModel 栏目Model

class CatModel extends Model{
	protected $table = 'category';

	//添加栏目
	/*
	@params:array
	你给你一个关键数组，键->表中的列，值-->表中的值,
	add()函数自动插入该行数据
	*/

	public function add($data){
		return $this->db->autoExecute($this->table, $data);
	}


	//获取本表下面的所有数据

	public function select(){
		$sql = 'SELECT cat_id, cat_name, parent_id FROM '. $this->table;
		return $this->db->getAll($sql);	
	}

	//根据主键取出一行数据
	public function find($cat_id){
		$sql = 'SELECT * FROM '.$this->table.' WHERE cat_id='.$cat_id;
		return $this->db->getRow($sql);

	}

	//无限级分类

	/*
	getCatTree
	params:int $id
	return $id 栏目子孙树
	*/

	public function getCatTree($arr, $id=0, $level = 0){
		$tree = array();
		foreach($arr as $v){
			if($v['parent_id'] == $id){
				$v['level'] = $level;
				$tree[] = $v;

				$tree = array_merge($tree, $this->getCatTree($arr, $v['cat_id'], $level+1));
			}
		}

		return $tree;
	}

	/*
	params:int $id
	return $id 栏目下的子栏目
	*/

	public function getSon($id){
		$sql = 'SELECT cat_id, cat_name, parent_id FROM '. $this->table . ' WHERE parent_id='.$id;
		return $this->db->getAll($sql);

	}

	/*
	params:int $id
	return array $id 栏目的家谱树
	*/

	public function getTree($id=0){
		$tree = array();
		$cats = $this->select(); //取出所有的cats
		
		while($id != 0){ //条件是没有找到最终的parent父类就一直循环
			foreach($cats as $v){
				if($v['cat_id'] == $id){
					$tree[] = $v; //先找到自身

					$id = $v['parent_id']; //把$v的parent_id作为$id继续找下去
					break;	 //跳出当前foreach继续找
				}
			}	
		}

		return $tree;

	}

	//删除栏目

	public function delete($cat_id){
		$sql = 'DELETE FROM '. $this->table. ' WHERE cat_id='.$cat_id;
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	//更新修改栏目

	public function update($data, $cat_id=0){
		$this->db->autoExecute($this->table, $data, 'update', ' where cat_id = '.$cat_id);

		return $this->db->affected_rows();
	}
	
}

?>