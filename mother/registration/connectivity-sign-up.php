<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'm&bc');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$email = $_POST['email'];
	$userName = $_POST['user'];
	$pass = $_POST['pass'];
	
	$dobdate = $_POST['Birthday_day'];
	$dobmonth = $_POST['Birthday_Month'];
	$dobyear = $_POST['Birthday_Year'];
	
	
	
	//$email = $_POST['Email_Id'];
	$mobil = $_POST['Mobile_Number'];

	$address = $_POST['address'];
	$city = $_POST['City'];
	$nic = $_POST['nic'];
	$cid = $_POST['cid'];
	$mid = $_POST['mid'];	
	$counry = $_POST['Country'];
	$moh = $_POST['moh'];
	$province = $_POST['province'];
	$pregnent = $_POST['pregnent'];	
	//$userName = $_POST['Hobby_Other'];
		//$userName = $_POST['ClassX_Board'];
			//$userName = $_POST['Hobby_Other'];
				//$userName = $_POST['Hobby_Other'];

	//$password =  $_POST['pass'];
	$query = "INSERT INTO mother_register (nic,First_Name,Last_Name,userName,email,pass,d_dob,m_dob,y_dob,mobile,address,city,country,cid,mid,moh,province,pregnent) VALUES ('$nic','$First_Name',$Last_Name,'$userName','$email','$pass','$dobdate','$dobmonth','$dobyear','$mobil','$address','$city','$counry','$cid','$mid','$moh','$province','$pregnent')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
	echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('YOUR REGISTRATION IS COMPLETED!.')
        window.location.href='../../index.html'
        </SCRIPT>");
	
}

function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM mother_register WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>


