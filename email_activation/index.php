<?php
include 'db.php';
$msg='';
if(!empty($_POST['email']) && isset($_POST['email']) )
{
// username and password sent from Form
$email=mysqli_real_escape_string($connection,$_POST['email']); 

$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

if(preg_match($regex, $email))
{  
$activation=md5($email.time()); // Encrypted email+timestamp

$count=mysqli_query($connection,"SELECT uid FROM request WHERE email='$email'");
if(mysqli_num_rows($count) < 1)
{
mysqli_query($connection,"INSERT INTO request(email,activation) VALUES('$email','$activation');");

include 'smtp/Send_Mail.php';
$to=$email;
$subject="Email verification";
$body='Dear student, <br/> <br/> Thank you for registering with us. <br/> <br/>Your Student ID: 100 <br/>Your password: shit005 <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';
Send_Mail($to,$subject,$body);

$msg= "Registration successful, please check your emails.";	
								echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Registration successful, please check your emails!.')
        window.location.href='../student/index.html'
        </SCRIPT>");

}
else
{
$msg= '<font color="#cc0000">The email is already taken, please try new.</font>';	
}



}
else
{
   $msg = '<font color="#cc0000">The email you have entered is invalid, please try again.</font>';  
}


}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>PHP Email Verification Script</title>
<link rel="stylesheet" href="style.css"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Student | Registration</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<script src="../js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(../images/bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
		<header>
		<img src="../images/Logo.png" width="150px" height="150px">
		<h1><strong><b>Sky Hope Institute Of Technology</b></strong></h1>		
				<h1> <strong> Student Registration</strong> </h1>
				<h2>Enter your email id to receive the student Username and Password</h2>
				
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form class="form-4" action="" method="post">
				    <h1>Final Step</h1>

				<label for="email">Your email</label><br />
				
				<input type="text" name="email" id="email" size="35" placeholder="Enter your email id" autocomplete="on" required>
								
				<input type="submit" value="send me a mail" /><span class='msg'><?php echo $msg;		
				?>
				
				</span> 
				</form>
     
			</section>
			
        </div>
    </body>
</html>
