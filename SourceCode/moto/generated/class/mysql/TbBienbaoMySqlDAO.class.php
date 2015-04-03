<?php
/**
 * Class that operate on table 'tb_bienbao'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
class TbBienbaoMySqlDAO implements TbBienbaoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TbBienbaoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tb_bienbao WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tb_bienbao';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tb_bienbao ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tbBienbao primary key
 	 */
	public function delete($stt){
		$sql = 'DELETE FROM tb_bienbao WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($stt);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbBienbaoMySql tbBienbao
 	 */
	public function insert($tbBienbao){
		$sql = 'INSERT INTO tb_bienbao (id_bien, link_anh, ten_bienbao, huongdan_bienbao) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbBienbao->idBien);
		$sqlQuery->set($tbBienbao->linkAnh);
		$sqlQuery->set($tbBienbao->tenBienbao);
		$sqlQuery->set($tbBienbao->huongdanBienbao);

		$id = $this->executeInsert($sqlQuery);	
		$tbBienbao->stt = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbBienbaoMySql tbBienbao
 	 */
	public function update($tbBienbao){
		$sql = 'UPDATE tb_bienbao SET id_bien = ?, link_anh = ?, ten_bienbao = ?, huongdan_bienbao = ? WHERE stt = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tbBienbao->idBien);
		$sqlQuery->set($tbBienbao->linkAnh);
		$sqlQuery->set($tbBienbao->tenBienbao);
		$sqlQuery->set($tbBienbao->huongdanBienbao);

		$sqlQuery->setNumber($tbBienbao->stt);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tb_bienbao';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdBien($value){
		$sql = 'SELECT * FROM tb_bienbao WHERE id_bien = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLinkAnh($value){
		$sql = 'SELECT * FROM tb_bienbao WHERE link_anh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTenBienbao($value){
		$sql = 'SELECT * FROM tb_bienbao WHERE ten_bienbao = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHuongdanBienbao($value){
		$sql = 'SELECT * FROM tb_bienbao WHERE huongdan_bienbao = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdBien($value){
		$sql = 'DELETE FROM tb_bienbao WHERE id_bien = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLinkAnh($value){
		$sql = 'DELETE FROM tb_bienbao WHERE link_anh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTenBienbao($value){
		$sql = 'DELETE FROM tb_bienbao WHERE ten_bienbao = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHuongdanBienbao($value){
		$sql = 'DELETE FROM tb_bienbao WHERE huongdan_bienbao = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TbBienbaoMySql 
	 */
	protected function readRow($row){
		$tbBienbao = new TbBienbao();
		
		$tbBienbao->stt = $row['stt'];
		$tbBienbao->idBien = $row['id_bien'];
		$tbBienbao->linkAnh = $row['link_anh'];
		$tbBienbao->tenBienbao = $row['ten_bienbao'];
		$tbBienbao->huongdanBienbao = $row['huongdan_bienbao'];

		return $tbBienbao;
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
	 * @return TbBienbaoMySql 
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