<?php
//Database connection settings
define ('hostnameorservername','localhost'); 
define ('serverusername','root'); 
define ('serverpassword',''); 
define ('databasenamed','m&bc'); 

global $connection;
$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server.');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database.');	
?>
