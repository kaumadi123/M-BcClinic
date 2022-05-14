<?php
define('_VALID', true);
require_once('/mother/login.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Staff | Login</title>
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
				background: #7f9b4e url(../images/bgmw1.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1
			{
				color: blue;
				font-size: 45px;
			}
			.container > header h2 {
				color: white;
				font-size: 30px;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
						.container > header h3
			{
				color: #7CFC00 ;
				font-size: 20px;
			}
		</style>
    </head>
    <body>
        <div class="container">
		<header>
		<img src="../images/Logo1.png" width="150px" height="150px">
		<h1><strong><b>Mother & Baby Care Clinical System</b></strong></h1>		
				<h2> <strong> Staff Login</strong> </h2>
				<a href="mother/signout.php"><h2> <strong> Logout</strong> </h2></a>

</body>
</html>