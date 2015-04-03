<?php
/**
 * Class that operate on table 'tb_phatvp_den'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
class TbPhatvpDenMySqlDAO implements TbPhatvpDenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TbPhatvpDenMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tb_phatvp_den WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tb_phatvp_den';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tb_phatvp_den ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tbPhatvpDen primary key
 	 */
	public function delete($stt){
		$sql = 'DELETE FROM tb_phatvp_den WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($stt);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbPhatvpDenMySql tbPhatvpDen
 	 */
	public function insert($tbPhatvpDen){
		$sql = 'INSERT INTO tb_phatvp_den (id_den, mucphat) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbPhatvpDen->idDen);
		$sqlQuery->set($tbPhatvpDen->mucphat);

		$id = $this->executeInsert($sqlQuery);	
		$tbPhatvpDen->stt = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbPhatvpDenMySql tbPhatvpDen
 	 */
	public function update($tbPhatvpDen){
		$sql = 'UPDATE tb_phatvp_den SET id_den = ?, mucphat = ? WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbPhatvpDen->idDen);
		$sqlQuery->set($tbPhatvpDen->mucphat);

		$sqlQuery->setNumber($tbPhatvpDen->stt);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tb_phatvp_den';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdDen($value){
		$sql = 'SELECT * FROM tb_phatvp_den WHERE id_den = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMucphat($value){
		$sql = 'SELECT * FROM tb_phatvp_den WHERE mucphat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdDen($value){
		$sql = 'DELETE FROM tb_phatvp_den WHERE id_den = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMucphat($value){
		$sql = 'DELETE FROM tb_phatvp_den WHERE mucphat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TbPhatvpDenMySql 
	 */
	protected function readRow($row){
		$tbPhatvpDen = new TbPhatvpDen();
		
		$tbPhatvpDen->stt = $row['stt'];
		$tbPhatvpDen->idDen = $row['id_den'];
		$tbPhatvpDen->mucphat = $row['mucphat'];

		return $tbPhatvpDen;
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
	 * @return TbPhatvpDenMySql 
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