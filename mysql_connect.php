<?php
define ('DB_USER', 'root');
define('DB_PASSWORD', 'root');

define('DB_HOST', 'localhost');
define('DB_NAME', 'PupFetcher');


$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD); 
if (!$con) {
die("A SQL error occurred: " . mysql_error());
}
if (!mysql_select_db(DB_NAME)) {
die("A SQL error occurred: " . mysql_error());
}
?>