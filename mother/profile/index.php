<!DOCTYPE html>
<html lang="en">
	    <head>
        <title>User | Profile</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<script src="js/modernizr.custom.63321.js"></script>
		<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
		<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/vpb_script.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/docbg3.jpg) repeat center top;
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
		<a href="../panel/index.php"><img src="images/logo.png" width="150px" height="150px"/></a>
		<h1><strong><b>Mother & Baby Care Clinical System</strong></h1>			
				<h1> <strong> User Profile </strong> </h1>
				

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			<center>
	<p>&nbsp;</p>
    <p>&nbsp; </p>
			  <?php  
	$conn=mysqli_connect('localhost','root','','m&bc');
	$query="SELECT * FROM mother_register;";
		$respond = mysqli_query($conn,$query);
		mysqli_close($conn);
		$respond = mysqli_fetch_assoc($respond);
?>
    <table width="500" border="0">
      <tr>
        <td width="2">
		
		<div class="vpb_profile_photo_wrapper">
          <img src="images/avatar2.png" alt="" width="150" style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;" border="0" /><br clear="all" />
          <br />			  
		  
          <br />

        </div>

		</td>
		


        <td width="4">
		
		<div>
			  
          <br />
           <div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">
		 <h2>First Name:</h2> <?php echo $respond['First_Name']; ?><br/>
		  <h2>Last Name:</h2> <?php echo $respond['Last_Name']; ?><br/>
		  <h2>User Name:</h2> <?php echo $respond['userName']; ?><br/>
		  <h2>Email ID:</h2> <?php echo $respond['Email_Id']; ?><br/>
		  <h2>Mobile Number:</h2> <?php echo $respond['Mobile_Number']; ?><br/>
		  <h2>Address:</h2> <?php echo $respond['Address']; ?><br/>
		  <h2>City:</h2> <?php echo $respond['City']; ?><br/>
		  <h2>NIC:</h2> <?php echo $respond['nic']; ?><br/>
		  <h2>MOH Area:</h2> <?php echo $respond['moh']; ?><br/>	  
		  <h2>Province:</h2> <?php echo $respond['province']; ?><br/>	 
		  <h2>Pregnant Status:</h2> <?php echo $respond['pregnent']; ?><br/>	 
		  <h2>Baby's Name:</h2> <?php echo $respond['b_name']; ?><br/>	 
		  <h2>Baby's DOB:</h2> <?php echo $respond['b_dateofbirth']; ?><br/>	 
		  <h2>Group Letter:</h2> <?php echo $respond['group_ltr']; ?>		  
		  
		  
		  
		  </div> 
        </div>

		</td> 
 </table> 		
		
		
        <td colspan="8">&nbsp;</td>
        <td width="8">&nbsp;</td>
      </tr>
      <tr>
		
	
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    </body>
    </html>