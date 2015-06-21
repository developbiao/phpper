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