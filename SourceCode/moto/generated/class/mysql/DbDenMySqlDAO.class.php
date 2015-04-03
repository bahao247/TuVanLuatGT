<?php
/**
 * Class that operate on table 'db_den'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
class DbDenMySqlDAO implements DbDenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DbDenMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM db_den WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM db_den';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM db_den ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param dbDen primary key
 	 */
	public function delete($stt){
		$sql = 'DELETE FROM db_den WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($stt);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DbDenMySql dbDen
 	 */
	public function insert($dbDen){
		$sql = 'INSERT INTO db_den (id_den, trangthai, huongdan_den) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($dbDen->idDen);
		$sqlQuery->set($dbDen->trangthai);
		$sqlQuery->set($dbDen->huongdanDen);

		$id = $this->executeInsert($sqlQuery);	
		$dbDen->stt = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DbDenMySql dbDen
 	 */
	public function update($dbDen){
		$sql = 'UPDATE db_den SET id_den = ?, trangthai = ?, huongdan_den = ? WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($dbDen->idDen);
		$sqlQuery->set($dbDen->trangthai);
		$sqlQuery->set($dbDen->huongdanDen);

		$sqlQuery->setNumber($dbDen->stt);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM db_den';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdDen($value){
		$sql = 'SELECT * FROM db_den WHERE id_den = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrangthai($value){
		$sql = 'SELECT * FROM db_den WHERE trangthai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHuongdanDen($value){
		$sql = 'SELECT * FROM db_den WHERE huongdan_den = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdDen($value){
		$sql = 'DELETE FROM db_den WHERE id_den = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTrangthai($value){
		$sql = 'DELETE FROM db_den WHERE trangthai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHuongdanDen($value){
		$sql = 'DELETE FROM db_den WHERE huongdan_den = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DbDenMySql 
	 */
	protected function readRow($row){
		$dbDen = new DbDen();
		
		$dbDen->stt = $row['stt'];
		$dbDen->idDen = $row['id_den'];
		$dbDen->trangthai = $row['trangthai'];
		$dbDen->huongdanDen = $row['huongdan_den'];

		return $dbDen;
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
	 * @return DbDenMySql 
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