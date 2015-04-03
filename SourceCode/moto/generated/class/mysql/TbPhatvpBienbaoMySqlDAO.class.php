<?php
/**
 * Class that operate on table 'tb_phatvp_bienbao'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
class TbPhatvpBienbaoMySqlDAO implements TbPhatvpBienbaoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TbPhatvpBienbaoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tb_phatvp_bienbao WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tb_phatvp_bienbao';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tb_phatvp_bienbao ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tbPhatvpBienbao primary key
 	 */
	public function delete($stt){
		$sql = 'DELETE FROM tb_phatvp_bienbao WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($stt);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbPhatvpBienbaoMySql tbPhatvpBienbao
 	 */
	public function insert($tbPhatvpBienbao){
		$sql = 'INSERT INTO tb_phatvp_bienbao (id_bien, mucphat) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbPhatvpBienbao->idBien);
		$sqlQuery->set($tbPhatvpBienbao->mucphat);

		$id = $this->executeInsert($sqlQuery);	
		$tbPhatvpBienbao->stt = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbPhatvpBienbaoMySql tbPhatvpBienbao
 	 */
	public function update($tbPhatvpBienbao){
		$sql = 'UPDATE tb_phatvp_bienbao SET id_bien = ?, mucphat = ? WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbPhatvpBienbao->idBien);
		$sqlQuery->set($tbPhatvpBienbao->mucphat);

		$sqlQuery->setNumber($tbPhatvpBienbao->stt);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tb_phatvp_bienbao';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdBien($value){
		$sql = 'SELECT * FROM tb_phatvp_bienbao WHERE id_bien = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMucphat($value){
		$sql = 'SELECT * FROM tb_phatvp_bienbao WHERE mucphat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdBien($value){
		$sql = 'DELETE FROM tb_phatvp_bienbao WHERE id_bien = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMucphat($value){
		$sql = 'DELETE FROM tb_phatvp_bienbao WHERE mucphat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TbPhatvpBienbaoMySql 
	 */
	protected function readRow($row){
		$tbPhatvpBienbao = new TbPhatvpBienbao();
		
		$tbPhatvpBienbao->stt = $row['stt'];
		$tbPhatvpBienbao->idBien = $row['id_bien'];
		$tbPhatvpBienbao->mucphat = $row['mucphat'];

		return $tbPhatvpBienbao;
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
	 * @return TbPhatvpBienbaoMySql 
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