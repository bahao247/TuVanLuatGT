<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
interface DbDenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DbDen 
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
 	 * @param dbDen primary key
 	 */
	public function delete($stt);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DbDen dbDen
 	 */
	public function insert($dbDen);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DbDen dbDen
 	 */
	public function update($dbDen);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdDen($value);

	public function queryByTrangthai($value);

	public function queryByHuongdanDen($value);


	public function deleteByIdDen($value);

	public function deleteByTrangthai($value);

	public function deleteByHuongdanDen($value);


}
?>