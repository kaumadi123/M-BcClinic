<!DOCTYPE html>
<html lang="en">

<head>
	<title>Appointment | Mothers</title>
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
	<!-- <script type="text/javascript" src="js/vpb_script.js"></script> -->
	<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
	<!-- <script>
		$( "#test" ).submit(function( event ) {
  alert( "Handler for .submit() called." );
  event.preventDefault();
})
	</script> -->
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
			$conn = mysqli_connect('localhost', 'root', '', 'm&bc');//connecting database
			$query = "SELECT City,group_ltr, COUNT(*) as members FROM mother_register GROUP BY City,group_ltr";//Select query for get data from database
			$result = mysqli_query($conn, $query);
			
			echo "<table>";
			$acc_count=0;
			while ($row = mysqli_fetch_assoc($result)) {
				$city=$row['City'];
				$group_letter=$row['group_ltr'];
				
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
				<span style="color:red;">'.$acc_count.' </span>';
				echo '</p>';
				echo '</div>';
				echo '</td>';

				echo '</tr>';




				/* ?>
						<tr >
						<td width="2">

							<div class="vpb_profile_photo_wrapper">
								<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">
								<?php echo $row['City']; ?><br>
								<?php echo $row['group_ltr']; ?><?php echo '-'?><?php echo $row['members']; ?></div>
								<br />
								<img src="images/doctor4.jpg" alt="" width="150"
									style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
									border="0" /><br clear="all" />
								<br />
							</div>
							<section class="main">
								<form class="form-4" name="login" method="post" action="">
									<input type="hidden" value="Dr.Sunil Fernando" name="lecname" />
									<input type="hidden" value="01" name="lecid" />
									<input type="submit" class='reqlecture' value="Request" />
								</form>
							</section>
						</td>
							  
							   
							</tr>
							<?php*/

							$accep_data="select count(*) as accpt_count from mother_allocation_rqst where city='$city' 
							and group_ltr='$group_letter' and accept_or_not='1'";
							$results = mysqli_query($conn, $accep_data);

							while ($rows = mysqli_fetch_assoc($results)) {
				
								$acc_count=$rows['accpt_count'];
							}
			}
			echo "<table>";
			

			
			

			$accep_data="SELECT city,group_ltr,COUNT(*) as accpt_count 
			FROM mother_allocation_rqst where accept_or_not='1' GROUP BY city,group_ltr";
			$results = mysqli_query($conn, $accep_data);
			while ($rows = mysqli_fetch_assoc($results)) {

					$acc_mem_city=$rows['city'];
					$acc_mem_grp_ltr=$rows['group_ltr'];
					$acc_count=$rows['accpt_count'];
				}
				mysqli_close($conn);
			?>
			<script>

			// var x=document.getElementById("KandyA");
			// x.value="sd";
			// alert(x);
			</script>
			<!-- <tr>
					<td width="2">

						<div class="vpb_profile_photo_wrapper">
							<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">Dr.Sunil
								Fernando<br>paediatrician</div>
							<br />
							<img src="images/doctor4.jpg" alt="" width="150"
								style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
								border="0" /><br clear="all" />
							<br />
						</div>
						<section class="main">
							<form class="form-4" name="login" method="post" action="">
								<input type="hidden" value="Dr.Sunil Fernando" name="lecname" />
								<input type="hidden" value="01" name="lecid" />
								<input type="submit" class='reqlecture' value="Request" />
							</form>
						</section>
					</td>

					<td width="2">
						<div class="vpb_profile_photo_wrapper">
							<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">Mother <br>Group 1
							</div>
							<br />
							<img src="images/doctor1.jpg" alt="" width="150"
								style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
								border="0" /><br clear="all" />
							<br />
						</div>
						<section class="main">
							<form class="form-4" name="login" method="post" action="">
								<input type="hidden" value="Dr.Tharushi Liyanage" name="lecname" />
								<input type="hidden" value="02" name="lecid" />
								<input type="submit" class='reqlecture' value="Request" />
						</section>
						</form>
					</td>



					<td width="2">
						<div class="vpb_profile_photo_wrapper">

							<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">
								<p>Dr.Shashikumar Balchandran</p>
								<p> VOG</p>
							</div>
							<br />
							<img src="../../img/lecture2.jpg" alt="" width="150"
								style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
								border="0" /><br clear="all" />
							<br />
						</div>
						<section class="main">
							<form class="form-4" name="login" method="post" action="">
								<input type="hidden" value="Dr.Shashikumar Balchandra" name="lecname" />
								<input type="hidden" value="03" name="lecid" />
								<input type="submit" class='reqlecture' value="Request" />
						</section>
						</form>
					</td>
</tr>
			</table> -->

			<!-- <table>


				<td width="2">
					<div class="vpb_profile_photo_wrapper">
						<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">Dr.Amaya
							Fernando<br>Paediatrician</div>
						<br />
						<img src="../../img/course-1.jpg" alt="" width="150"
							style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
							border="0" /><br clear="all" />
						<br />
					</div>
					<section class="main">
						<form class="form-4" name="login" method="post" action="">
							<input type="hidden" value="Dr.Amaya Fernando" name="lecname" />
							<input type="hidden" value="04" name="lecid" />
							<input type="submit" class='reqlecture' value="Request" />
					</section>
					</form>
				</td> -->

			<!-- 
				<td width="2">
					<div class="vpb_profile_photo_wrapper">
						<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">
							<p>Dr.Andrew Blake</p>
							<p>VOG</p>
						</div>
						<br />
						<img src="../../img/JR.jpg" alt="" width="150"
							style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
							border="0" /><br clear="all" />
						<br />
					</div>
					<section class="main">
						<form class="form-4" name="login" method="post" action="">
							<input type="hidden" value="Dr.Andrew Blake" name="lecname" />
							<input type="hidden" value="05" name="lecid" />
							<!-- <input type="hidden" value="05" name="specialization" /> -->
			<!-- <input type="submit" class='reqlecture' value="Request" />
					</section>
					</form>
				</td>

				<br />
				<br />
				<br />
				<br />


				<td width="2">
					<div class="vpb_profile_photo_wrapper">
						<div style=" font-family:Verdana, Geneva, sans-serif;font-size:18px;">
							<p>Dr.Nimal Bandara</p>
							<p>Paediatrician</p>
						</div>
						<br />
						<img src="../../img/author.jpg" alt="" width="150"
							style="min-height:150px; height:auto;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;"
							border="0" /><br clear="all" />
						<br />
					</div>
					<section class="main">
						<form class="form-4" name="login" method="post" action="">
							<input type="hidden" value="Dr.Nimal Bandara" name="lecname" />
							<input type="hidden" value="06" name="lecid" />
							<input type="submit" class='reqlecture' value="Request" />
					</section>
					</form>
				</td>



				<td colspan="4">&nbsp;</td>
				<td width="8">&nbsp;</td>
				</tr>
				<tr>


				</tr> -->
			<!-- </table> -->
			
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
</body>

</html>