<?php
//Database connection settings
$host='localhost';
$dbuser='root';
$password='';
$dbname='m&bc';

    
$connectToServer='';

$connectToServer=mysqli_connect($host,$dbuser,$password)
or die("server problem");

mysqli_select_db($connectToServer,$dbname) or 
die("database not found");
	
?>
