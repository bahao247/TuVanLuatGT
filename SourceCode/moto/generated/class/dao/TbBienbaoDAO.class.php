<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
interface TbBienbaoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TbBienbao 
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
 	 * @param tbBienbao primary key
 	 */
	public function delete($stt);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbBienbao tbBienbao
 	 */
	public function insert($tbBienbao);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbBienbao tbBienbao
 	 */
	public function update($tbBienbao);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdBien($value);

	public function queryByLinkAnh($value);

	public function queryByTenBienbao($value);

	public function queryByHuongdanBienbao($value);


	public function deleteByIdBien($value);

	public function deleteByLinkAnh($value);

	public function deleteByTenBienbao($value);

	public function deleteByHuongdanBienbao($value);


}
?>