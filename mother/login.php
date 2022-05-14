 <?php
 if(!isset($_SESSION))
		session_start();
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['username']);
$password=mysql_escape_string($_POST['password']);
if (!$_POST['username'] | !$_POST['password'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='index.html'
        </SCRIPT>");
exit();
     }
$sql= mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
	$login_user = mysql_fetch_assoc($sql);
	$_SESSION['username'] = $login_user['id'];
	$_SESSION['logged_as'] = 'mother';
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='panel/index.php'
        </SCRIPT>");
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='index.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>