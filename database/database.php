<?php


	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
	define('DB_DB', 'PupFetcher');
	
	/*
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mnicholas');
	define('DB_PASS', 'mnicholas');
	define('DB_DB', 'mnicholas');
	*/
	
	
	//	Put all files in project to ylis.gcsu.edu via Fugu after changing this
	
	function database_connect()
	{
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	
		$db_selected = mysql_select_db(DB_DB, $link);
	
		return $link;
	}
	
	
	
	/* Usage of database class 
	
	
		$database = database::getInstance();
		
		$result = $database->query("SELECT * FROM `table`");
		
		foreach($result as $res)
		{
		
			print_r($res);
		}
	
	
	*/

?>


<?php
	error_reporting(0);
?>