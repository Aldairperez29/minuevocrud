<?php
$db_host="brqtsrvrusqj5uu64yea-mysql.services.clever-cloud.com"; //localhost server 
$db_user="uo18mggzks4harva";	//database username
$db_password="rZ6Mem73aHqENmuqLYxn";	//database password   
$db_name="brqtsrvrusqj5uu64yea";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



