<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DB', 'puppies');

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

class database 
{
	private static $instance = NULL;
	private $db;
	private $result;
	
	public static function getInstance()
	{
		if(self::$instance == NULL)
		{
			self::$instance = new database();
		}
		
		return self::$instance;
	}
	
	
	public function __construct()
	{
		$this->db = mysql(DB_HOST, DB_USER, DB_PASS);
		
		$blah = mysql_select_db($this->db, DB_DB);
	}
	
	public function query($query)
	{
		$this->result = mysqli_query($query);
		
		$ret = array();
		
		while($temp = mysqli_fetch_assoc($this->result))
		{
			$ret[] = $temp;
		}
		
		return $ret;
	}
	
	
	
	
}





?>
