<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-03 15:08
 */
interface TbHieulenhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TbHieulenh 
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
 	 * @param tbHieulenh primary key
 	 */
	public function delete($stt);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TbHieulenh tbHieulenh
 	 */
	public function insert($tbHieulenh);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TbHieulenh tbHieulenh
 	 */
	public function update($tbHieulenh);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdLenh($value);

	public function queryByHuongdanHieulenh($value);


	public function deleteByIdLenh($value);

	public function deleteByHuongdanHieulenh($value);


}
?>