<?php

	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
	if(!$sql)
		{
		die("Database Query Failed ".mysql_error());
		}
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	$store=mysql_fetch_array($result);
	if($count==1)
	{
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['id']=$store['id'];
		header("location:user.php?id={$_SESSION['id']}");
	}
	else
	{
		echo "Login Attempt Failed<br/><a href=\"../index.php\">Go Back</a>";
	}
	
?>
