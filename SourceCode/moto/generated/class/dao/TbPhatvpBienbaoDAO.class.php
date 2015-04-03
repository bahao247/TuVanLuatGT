<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
interface TbPhatvpBienbaoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TbPhatvpBienbao 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param tbPhatvpBienbao primary key
 	 */
	public function delete($stt);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbPhatvpBienbao tbPhatvpBienbao
 	 */
	public function insert($tbPhatvpBienbao);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbPhatvpBienbao tbPhatvpBienbao
 	 */
	public function update($tbPhatvpBienbao);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdBien($value);

	public function queryByMucphat($value);


	public function deleteByIdBien($value);

	public function deleteByMucphat($value);


}
?>