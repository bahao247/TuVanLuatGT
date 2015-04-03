<?php
/**
 * Class that operate on table 'tb_hieulenh'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
class TbHieulenhMySqlDAO implements TbHieulenhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TbHieulenhMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tb_hieulenh WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tb_hieulenh';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tb_hieulenh ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tbHieulenh primary key
 	 */
	public function delete($stt){
		$sql = 'DELETE FROM tb_hieulenh WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($stt);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbHieulenhMySql tbHieulenh
 	 */
	public function insert($tbHieulenh){
		$sql = 'INSERT INTO tb_hieulenh (id_lenh, huongdan_hieulenh) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbHieulenh->idLenh);
		$sqlQuery->set($tbHieulenh->huongdanHieulenh);

		$id = $this->executeInsert($sqlQuery);	
		$tbHieulenh->stt = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbHieulenhMySql tbHieulenh
 	 */
	public function update($tbHieulenh){
		$sql = 'UPDATE tb_hieulenh SET id_lenh = ?, huongdan_hieulenh = ? WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbHieulenh->idLenh);
		$sqlQuery->set($tbHieulenh->huongdanHieulenh);

		$sqlQuery->setNumber($tbHieulenh->stt);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tb_hieulenh';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdLenh($value){
		$sql = 'SELECT * FROM tb_hieulenh WHERE id_lenh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHuongdanHieulenh($value){
		$sql = 'SELECT * FROM tb_hieulenh WHERE huongdan_hieulenh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdLenh($value){
		$sql = 'DELETE FROM tb_hieulenh WHERE id_lenh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHuongdanHieulenh($value){
		$sql = 'DELETE FROM tb_hieulenh WHERE huongdan_hieulenh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TbHieulenhMySql 
	 */
	protected function readRow($row){
		$tbHieulenh = new TbHieulenh();
		
		$tbHieulenh->stt = $row['stt'];
		$tbHieulenh->idLenh = $row['id_lenh'];
		$tbHieulenh->huongdanHieulenh = $row['huongdan_hieulenh'];

		return $tbHieulenh;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TbHieulenhMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>