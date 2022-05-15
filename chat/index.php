<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M&bc | Chat</title>




<!-- Required header files for the chat system -->
<script type="text/javascript" src="vasplus_programming_blog_chat_application/js/jquery_1.5.2.js"></script>
<script type="text/javascript" src="vasplus_programming_blog_chat_application/js/file_uploads.js"></script>
<script type="text/javascript" src="vasplus_programming_blog_chat_application/js/base64.js"></script>
<script type="text/javascript" src="vasplus_programming_blog_chat_application/js/post_watermarkinput.js"></script>
<script type="text/javascript" src="vasplus_programming_blog_chat_application/js/vasplus_programming_blog_JS.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="vasplus_programming_blog_chat_application/css/vasplus_programming_blog_chat.css" />
<link rel="shortcut icon" href="../favicon.ico"> 
<script src="../js/modernizr.custom.63321.js"></script>

		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(../images/bgmw.jpg) no-repeat center top;
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
		<a href="../mother/panel/index.php"><img src="../images/logo.png" width="150px" height="150px"></a>
		<h1><strong><b>Mother & Baby Care Clinical System</b></strong></h1>		
				<h2>Your Ideas is make your work more easy and helps memorised thing that<br/> you needs the most. Furthermore all can discuses about any topics type feel free to start from today..</h2>

			</header>
			</div>
			<br/>
			<br/>
			<br/>
			<br/>


<center>
<!-- CHAT CODE STARTS HERE -->
<div id="vpb_chat_wrapper" align="center">
<noscript><div class="info" align="left"><font style="font-family: Verdana, Geneva, sans-serif;color: black;font-size:11px; line-height:20px;">JavaScript must be enabled on this browser in order to chat on this website. <br>However, it seems JavaScript is either disabled or not supported by your browser.<br>To enable JavaScript on Mozilla Firefox, do the following:<br />Go to Tools -> Options -> Content -> Enable JavaScript -> Ok<br>Then <span class="ccc"><a href="">click here to try again</a></span></font></div></noscript>

<div style="width:300px; float:left;border-right:0px solid #CCC;" align="center"><div id="lefttopbar"></div>
<div style="overflow-y:auto; overflow-x:hidden; width:300px; height:300px;" id="vasplus_programming_blog_chats_scroller">
<div style="padding:5px;" id="vasplus_programming_blog_chats_displayer"></div></div><div style="width:300px; margin:0px; padding:0px; border-top:1px solid #CCC;" align="center"> <input id="chatMessage" class="vpb_text_input_box" onkeydown="javascript:return checkChatBoxInputKey(event,this);" style="display:none;" placeholder="Type your chat message here..." /><input id="fakechatMessage" class="vpb_text_input_box" onclick="showLoginBox();" readonly="readonly" style="cursor: pointer;" placeholder="Click here to login so as to chat..." /></div></div><div style="width:199px; height:331px;float:left;border:0px solid #CCC;border-left:1px solid #CCC;" align="center"><div class="vpb_right_header" align="center"><span style="padding-left:5px; padding-right:5px;">Users Online</span></div><div style="width:196px;height:300px; text-align:center;overflow-y:auto;overflow-x:hidden;">
<div style="width:100%;height:300px;" class="vasplusChat_OnlineUsers" id="display_users_online"></div></div><div style="width:199px; height:29px;height:29px; text-align:center; border-top:1px solid #CCC; padding-top:5px;"><div style="float:right; width:60px;" align="right"><span class="ccc" id="logout_btn" style="display:none;"><a href="javascript:void(0);" onclick="chatLogoutOperation();" class="vasplus_tooltips"><div id="vasplus_programming_blog_chat_BTN" style="width:10px; height:10px; padding-top:1px; padding-bottom:11px; margin-right:5px; padding-left:7px; padding-right:7px; float:right;" align="center">x</div><span style="font-family:Verdana, Geneva, sans-serif; font-size:11px; font-weight:normal; font-style:normal;color:black;">Logout</span></a></span></div><div style="float:right; width:60px; display:none;" id="newChatNotification" align="right">ssDD</div><div style="float:right; width:60px; display:none;" id="photoUploadButton" align="right"></div></div></div><br clear="all">



<!-- PHOTO UPLOADS STARTS HERE -->
<div style="width:500px; background:#F9F9F9;text-align:left;border:0px solid #CCC;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius:4px; padding-top:6px;display:none;" id="vasplus_programming_blog_photo_upload_Box"><div style="" id="vpb_chatPhoto_attached_file_status"></div><div style="width:150px; float:left; padding:10px;"><div id="updated_photo_by_vasplus_programming_blog" align="left"><?php include "config.php"; $check_usersPic = mysql_query("select * from `chat_vpb_users` where `username` = '".mysql_real_escape_string(strip_tags($_COOKIE['usernames']))."'"); $get_userPic = mysql_fetch_array($check_usersPic); if(empty($get_userPic["photo"])) { $userPic = "avatar.gif"; } else { $userPic = strip_tags($get_userPic["photo"]); } echo "<span class='nprofileimg'><a href='javascript:void(0);'><img src='vasplus_programming_blog_chat_application/photos/".$userPic."' alt='".strip_tags($get_userPic["fullname"])."' title='".strip_tags($get_userPic["fullname"])."' border='0' style='width:100px;height:90px;'></a></span>"; ?></div></div><div style="width:150px; float:left; padding-top:40px;" align="left"><form method="post" action="javascript:void(0);" id="vasplus_programming_blog_attachmentchatform" name="vasplus_programming_blog_attachmentchatform"><div class="aadileds"><input type="file" name="attachedFile" id="attachedFile" style="opacity:0;-moz-opacity:0;filter:alpha(opacity:0);z-index:9999999;width:90px;padding:5px;cursor:default;" /></div></form></div><br clear="all" /></div>
<!-- PHOTO UPLOADS ENDS HERE -->


<!-- LOGIN BOX STARTS HERE -->
<div style="width:500px; background:#F9F9F9;text-align:left;border:0px solid #CCC;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius:4px; padding-top:6px;display:none;" id="vasplus_programming_blog_login_Box"><br clear="all" /><div style="float:left; width:80px; font-family:Verdana, Geneva, sans-serif; font-size:12px; padding:10px;" align="left">Username:</div><div style="float:left; width:300px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><input type="text" id="usernamed" style="width:280px; height:17px;" class="textAreaBox"></div><br clear="all" /><br clear="all" /><div style="float:left; width:80px; font-family:Verdana, Geneva, sans-serif; font-size:12px;padding:10px;" align="left">Password</div><div style="float:left; width:300px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><input type="password" id="passwordd" style="width:280px; height:17px;" class="textAreaBox"></div><br clear="all" /><br clear="all" /><div style="float:left; width:100px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left">&nbsp;</div><div style="float:left; width:350px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><div id="vasplus_programming_blog_chat_BTNG" onclick="logins();">Login</div><div id="vasplus_programming_blog_chat_BTNG" onclick="showSignupBox();">Sign Up</div><div id="vasplus_programming_blog_chat_BTNG" onclick="showLoginBox();">Cancel</div>
<br clear="all" /><br clear="all" /></div><br clear="all" /><div id="login_status" align="left"></div></div>
<!-- LOGIN BOX ENDS HERE -->


<!-- SIGN-UP BOX STARTS HERE -->
<div style="width:500px; background:#F9F9F9;text-align:left;border:0px solid #CCC;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius:4px; padding-top:6px; display:none;" id="vasplus_programming_blog_signup_Box"><br clear="all" /><div style="float:left; width:80px; font-family:Verdana, Geneva, sans-serif; font-size:12px; padding:10px;" align="left">Fullname:</div><div style="float:left; width:300px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><input type="text" id="fullnames" style="width:280px; height:17px;" class="textAreaBox"></div><br clear="all" /><br clear="all" /><div style="float:left; width:80px; font-family:Verdana, Geneva, sans-serif; font-size:12px; padding:10px;" align="left">Username:</div><div style="float:left; width:300px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><input type="text" id="usernames" style="width:280px; height:17px;" class="textAreaBox"></div><br clear="all" /><br clear="all" /><div style="float:left; width:80px; font-family:Verdana, Geneva, sans-serif; font-size:12px;padding:10px;" align="left">Password</div><div style="float:left; width:300px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><input type="password" id="passwords" style="width:280px; height:17px;" class="textAreaBox"></div><br clear="all" /><br clear="all" /><div style="float:left; width:100px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left">&nbsp;</div><div style="float:left; width:350px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left"><div id="vasplus_programming_blog_chat_BTNG" onclick="signUps();">Submit</div><div id="vasplus_programming_blog_chat_BTNG" onclick="showLoginBox();">Back</div><div id="vasplus_programming_blog_chat_BTNG" onclick="hideSignupBox();">Cancel</div></div><br clear="all" /><br clear="all" /><div id="signup_status" align="left"></div></div>
<!-- SIGN-UP BOX ENDS HERE -->


</div>
<!-- CHAT CODE ENDS HERE -->
</center>


















<p style="margin-bottom:300px;">&nbsp;</p>
</center>







</body>
</html>