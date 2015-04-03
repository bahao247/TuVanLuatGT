<?php
/**
 * Class that operate on table 'tb_phatvp_hieulenh'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
class TbPhatvpHieulenhMySqlDAO implements TbPhatvpHieulenhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TbPhatvpHieulenhMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tb_phatvp_hieulenh WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tb_phatvp_hieulenh';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tb_phatvp_hieulenh ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tbPhatvpHieulenh primary key
 	 */
	public function delete($stt){
		$sql = 'DELETE FROM tb_phatvp_hieulenh WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($stt);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbPhatvpHieulenhMySql tbPhatvpHieulenh
 	 */
	public function insert($tbPhatvpHieulenh){
		$sql = 'INSERT INTO tb_phatvp_hieulenh (id_lenh, mucphat) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbPhatvpHieulenh->idLenh);
		$sqlQuery->set($tbPhatvpHieulenh->mucphat);

		$id = $this->executeInsert($sqlQuery);	
		$tbPhatvpHieulenh->stt = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbPhatvpHieulenhMySql tbPhatvpHieulenh
 	 */
	public function update($tbPhatvpHieulenh){
		$sql = 'UPDATE tb_phatvp_hieulenh SET id_lenh = ?, mucphat = ? WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbPhatvpHieulenh->idLenh);
		$sqlQuery->set($tbPhatvpHieulenh->mucphat);

		$sqlQuery->setNumber($tbPhatvpHieulenh->stt);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tb_phatvp_hieulenh';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdLenh($value){
		$sql = 'SELECT * FROM tb_phatvp_hieulenh WHERE id_lenh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMucphat($value){
		$sql = 'SELECT * FROM tb_phatvp_hieulenh WHERE mucphat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdLenh($value){
		$sql = 'DELETE FROM tb_phatvp_hieulenh WHERE id_lenh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMucphat($value){
		$sql = 'DELETE FROM tb_phatvp_hieulenh WHERE mucphat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TbPhatvpHieulenhMySql 
	 */
	protected function readRow($row){
		$tbPhatvpHieulenh = new TbPhatvpHieulenh();
		
		$tbPhatvpHieulenh->stt = $row['stt'];
		$tbPhatvpHieulenh->idLenh = $row['id_lenh'];
		$tbPhatvpHieulenh->mucphat = $row['mucphat'];

		return $tbPhatvpHieulenh;
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
	 * @return TbPhatvpHieulenhMySql 
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