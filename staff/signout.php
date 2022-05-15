<?php
define('_VALID', true);
session_start();
if(isset($_SESSION['USR']))
	unset($_SESSION['USR']);
if(isset($_COOKIE['USR']))
	setcookie('USR', '', time()-172800);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Redirecting...</title>
<style type="text/css">
  body{background-color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:12px;color:#000;margin:0;padding:0}
  div.msg{padding:5px}
</style>
</head>
<body>
<div class="msg">Redirecting...</div>
</body>
</html>
<?php
header("location: index.html");
exit;
?>