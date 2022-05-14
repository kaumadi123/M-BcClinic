<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'm&bc');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	
	$fname = $_POST['First_Name'];
	$lname= $_POST['Last_Name'];
	
	$fullname = $fname.' '.$lname;
	$email = $_POST['email'];
	$userName = $_POST['user'];
	$pass = $_POST['pass'];
	
	$dobdate = $_POST['Birthday_day'];
	$dobmonth = $_POST['Birthday_Month'];
	$dobyear = $_POST['Birthday_Year'];
	
	
	
	//$email = $_POST['Email_Id'];
	$mobil = $_POST['Mobile_Number'];
	$gender = $_POST['Gender'];
	$address = $_POST['address'];
	$city = $_POST['City'];
	$nic = $_POST['nic'];
	$stat = $_POST['State'];
	$counry = $_POST['Country'];
	$hobby = $_POST['hobby'];
	$course = $_POST['course'];
	//$userName = $_POST['Hobby_Other'];
		//$userName = $_POST['ClassX_Board'];
			//$userName = $_POST['Hobby_Other'];
				//$userName = $_POST['Hobby_Other'];

	//$password =  $_POST['pass'];
	$query = "INSERT INTO st_register (fullname,userName,email,pass,d_dob,m_dob,y_dob,mobile,gender,address,city,nic,state,country,hobbies,course) VALUES ('$fullname','$userName','$email','$pass','$dobdate','$dobmonth','$dobyear','$mobil','gender','$address','$city','$nic','$stat','$counry','$hobby','$course')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
	echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('YOUR REGISTRATION IS COMPLETED!.')
        window.location.href='../../Login/payments/index.php'
        </SCRIPT>");
	
}

function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM stf_register WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

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


