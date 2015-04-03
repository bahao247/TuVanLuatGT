<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return DbDenDAO
	 */
	public static function getDbDenDAO(){
		return new DbDenMySqlExtDAO();
	}

	/**
	 * @return TbBienbaoDAO
	 */
	public static function getTbBienbaoDAO(){
		return new TbBienbaoMySqlExtDAO();
	}

	/**
	 * @return TbHieulenhDAO
	 */
	public static function getTbHieulenhDAO(){
		return new TbHieulenhMySqlExtDAO();
	}

	/**
	 * @return TbPhatvpBienbaoDAO
	 */
	public static function getTbPhatvpBienbaoDAO(){
		return new TbPhatvpBienbaoMySqlExtDAO();
	}

	/**
	 * @return TbPhatvpDenDAO
	 */
	public static function getTbPhatvpDenDAO(){
		return new TbPhatvpDenMySqlExtDAO();
	}

	/**
	 * @return TbPhatvpHieulenhDAO
	 */
	public static function getTbPhatvpHieulenhDAO(){
		return new TbPhatvpHieulenhMySqlExtDAO();
	}


}
?>