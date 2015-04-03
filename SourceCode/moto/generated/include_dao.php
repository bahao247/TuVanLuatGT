<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/DbDenDAO.class.php');
	require_once('class/dto/DbDen.class.php');
	require_once('class/mysql/DbDenMySqlDAO.class.php');
	require_once('class/mysql/ext/DbDenMySqlExtDAO.class.php');
	require_once('class/dao/TbBienbaoDAO.class.php');
	require_once('class/dto/TbBienbao.class.php');
	require_once('class/mysql/TbBienbaoMySqlDAO.class.php');
	require_once('class/mysql/ext/TbBienbaoMySqlExtDAO.class.php');
	require_once('class/dao/TbHieulenhDAO.class.php');
	require_once('class/dto/TbHieulenh.class.php');
	require_once('class/mysql/TbHieulenhMySqlDAO.class.php');
	require_once('class/mysql/ext/TbHieulenhMySqlExtDAO.class.php');
	require_once('class/dao/TbPhatvpBienbaoDAO.class.php');
	require_once('class/dto/TbPhatvpBienbao.class.php');
	require_once('class/mysql/TbPhatvpBienbaoMySqlDAO.class.php');
	require_once('class/mysql/ext/TbPhatvpBienbaoMySqlExtDAO.class.php');
	require_once('class/dao/TbPhatvpDenDAO.class.php');
	require_once('class/dto/TbPhatvpDen.class.php');
	require_once('class/mysql/TbPhatvpDenMySqlDAO.class.php');
	require_once('class/mysql/ext/TbPhatvpDenMySqlExtDAO.class.php');
	require_once('class/dao/TbPhatvpHieulenhDAO.class.php');
	require_once('class/dto/TbPhatvpHieulenh.class.php');
	require_once('class/mysql/TbPhatvpHieulenhMySqlDAO.class.php');
	require_once('class/mysql/ext/TbPhatvpHieulenhMySqlExtDAO.class.php');

?>