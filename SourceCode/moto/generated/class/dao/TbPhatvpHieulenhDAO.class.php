<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
interface TbPhatvpHieulenhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TbPhatvpHieulenh 
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
 	 * @param tbPhatvpHieulenh primary key
 	 */
	public function delete($stt);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbPhatvpHieulenh tbPhatvpHieulenh
 	 */
	public function insert($tbPhatvpHieulenh);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbPhatvpHieulenh tbPhatvpHieulenh
 	 */
	public function update($tbPhatvpHieulenh);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdLenh($value);

	public function queryByMucphat($value);


	public function deleteByIdLenh($value);

	public function deleteByMucphat($value);


}
?>