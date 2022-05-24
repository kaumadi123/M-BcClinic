<!DOCTYPE html>
<html lang="en">
	    <head>
        <title>Calender | Request</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link href="../css/style1.css" rel="stylesheet" type="text/css">
		    <link rel="stylesheet" href="6-calendar.css">
    <script src="5-calendar.js"></script>
		<script src="../js/modernizr.custom.63321.js"></script>
		<script type="text/javascript" src="../js/jquery_1.5.2.js"></script>
		<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/vpb_script.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(../images/bg3.jpg) repeat center top;
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
		<a href="../staff/panel/index.php"><img src="../images/logo1.png" width="150px" height="150px"/></a>
		<h1><strong><b>Mother & Baby Care Clinical System<strong></h1>			
				<h1> <strong> Calendar </strong> </h1>
				<h2>To have an appointment with any doctors feel free to contact your midwife or<Br/> by selecting the request below clicking the "request" Button.. </h2>
				

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			<center>
			  <body>
	<p>&nbsp;</p>
    <p>&nbsp; </p>


    <!-- (A) PERIOD SELECTOR -->
    <div id="calPeriod"><?php
      // (A1) MONTH SELECTOR
      // NOTE: DEFAULT TO CURRENT SERVER MONTH YEAR
      $months = [
        1 => "January", 2 => "Febuary", 3 => "March", 4 => "April",
        5 => "May", 6 => "June", 7 => "July", 8 => "August",
        9 => "September", 10 => "October", 11 => "November", 12 => "December"
      ];
      $monthNow = date("m");
      echo "<select id='calmonth'>";
      foreach ($months as $m=>$mth) {
        printf("<option value='%s'%s>%s</option>",
          $m, $m==$monthNow?" selected":"", $mth
        );
      }
      echo "</select>";

      // (A2) YEAR SELECTOR
      echo "<input type='number' id='calyear' value='".date("Y")."'/>";
    ?></div>

    <!-- (B) CALENDAR WRAPPER -->
    <div id="calwrap"></div>

    <!-- (C) EVENT FORM -->
    <div id="calblock"><form id="calform">
      <input type="hidden" name="req" value="save"/>
      <input type="hidden" id="evtid" name="eid"/>
      <label for="start">Date Start</label>
      <input type="datetime-local" id="evtstart" name="start" required/>
      <label for="end">Date End</label>
      <input type="datetime-local" id="evtend" name="end" required/>
      <label for="txt">Event</label>
      <textarea id="evttxt" name="txt" required></textarea>
      <label for="color">Color</label>
      <input type="color" id="evtcolor" name="color" value="#e4edff" required/>
      <input type="submit" id="calformsave" value="Save"/>
      <input type="button" id="calformdel" value="Delete"/>
      <input type="button" id="calformcx" value="Cancel"/>
    </form></div>
  </body>
</html>
