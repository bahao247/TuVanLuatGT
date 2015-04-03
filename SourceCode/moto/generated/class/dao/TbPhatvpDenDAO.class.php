<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
interface TbPhatvpDenDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TbPhatvpDen 
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
 	 * @param tbPhatvpDen primary key
 	 */
	public function delete($stt);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbPhatvpDen tbPhatvpDen
 	 */
	public function insert($tbPhatvpDen);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbPhatvpDen tbPhatvpDen
 	 */
	public function update($tbPhatvpDen);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdDen($value);

	public function queryByMucphat($value);


	public function deleteByIdDen($value);

	public function deleteByMucphat($value);


}
?>