<!DOCTYPE html>
<html lang="en">

<head>
	<title>Appinment | Mothers</title>
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
	<script type="text/javascript" src="js/sending_alloc_details.js"></script>

	<style>
		@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);

		body {
			background: #7f9b4e url(images/tail-middle.jpg) repeat center top;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
		}

		.container>header h1,
		.container>header h2 {
			color: #fff;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.7);
		}
	</style>
</head>

<body>
	<div class="container">

		<header>
			<a href="../panel/index.php"><img src="images/logo.png" width="150px" height="150px" /></a>
			<h1><strong><b>Mother & Baby Care Clinical System</strong></h1>
			<h1> <strong> Mother appointment </strong> </h1>
			<h2>To have an appointment with your midwife or<Br /> by selecting the
				request below clicking the "request" Button. It will be sent to the require groups. </h2>


			<div class="support-note">
				<span class="note-ie">Sorry, only modern browsers.</span>
			</div>

		</header>
		<center>
			<p>&nbsp;</p>
			<p>&nbsp; </p>

			<!-- <table width="500" border="0"> -->
			<?php
			$conn = mysqli_connect('localhost', 'root', '', 'm&bc'); //connecting database
			$query = "SELECT City,group_ltr, COUNT(*) as members FROM mother_register GROUP BY City,group_ltr"; //Select query for get data from database
			$result = mysqli_query($conn, $query);

			echo "<table>";
			$acc_count = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				$city = $row['City'];
				$group_letter = $row['group_ltr'];

				echo '<tr>';

				echo '<td width="2" style="margin-right:150px">';
				echo '<div class="vpb_profile_photo_wrapper">';

				echo '<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">' . $row['City'] . '</br>' . $row['group_ltr'] . '-' . $row['members'];


				echo '</div>';
				echo '<br />';
				echo '<img src="images/mother.jpg" alt="" width="150"
			 	style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
			 	border="0" />';
				echo '<br clear="all" />';
				echo '<br />';
				echo '</div>';
				echo '<section class="main">';
				echo '<form class="form-4" id="test" name="login" method="post" action="">';
				echo '<input type="hidden" value=' . $row['City'] . ' name="city" />';
				echo '<input type="hidden" value=' . $row['group_ltr'] . ' name="group_ltr" />';
				echo '<p>&nbsp;</p>';

				echo '<input type="submit"  class="reqlecture" value="Request" />';
				echo '</form>';
				echo '</section>';
				echo '</td>';
				echo '<td>';
				echo '<div style="width:100px;height:100px;background:#33C8FF;margin-top:5px;justify-content: 
					center;">';
				echo '<p style="text-align:center;vertical-align: middle;">Accepted:</br>
				<span id="' . $row['City'] . $row['group_ltr'] . '" style="color:red;"> </span>';
				echo '</p>';
				echo '</div>';
				echo '</td>';

				echo '</tr>';
			}
			echo "<table>";




			
//new code begin....


			$accep_data = "SELECT city,group_ltr,COUNT(*) as accpt_count 
			FROM mother_allocation_rqst where accept_or_not='1' GROUP BY city,group_ltr";
			$results = mysqli_query($conn, $accep_data);
			$arr = array();
			while ($rows = mysqli_fetch_assoc($results)) {
				$arr[] = $rows;
			}
			mysqli_close($conn);


			?>


			<script>
				var id = '';

				var passedArray = <?php echo json_encode($arr); ?>;


				const elements3 = document.getElementsByTagName('span');

				for (var x = 0; x < elements3.length; x++) {

					var ele_id = elements3[x].getAttribute('id');


					for (var i = 0; i < passedArray.length; i++) {

						id = passedArray[i]['city'].concat(passedArray[i]['group_ltr']);
						accpt_count = passedArray[i]['accpt_count'];

						if (ele_id == id && accpt_count !== null) {
							document.getElementById(elements3[x].getAttribute('id')).innerHTML = accpt_count;
						}


					}


				}
			</script>
			

			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
</body>

</html>