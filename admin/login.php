 <?php
 if(!isset($_SESSION))
		session_start();
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['uname']);
$password=mysql_escape_string($_POST['pass']);
if (!$_POST['uname'] | !$_POST['pass'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='index.html'
        </SCRIPT>");
exit();
     }
$sql= mysql_query("SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
	$login_user = mysql_fetch_assoc($sql);
	$_SESSION['student_id'] = $login_user['id'];
	$_SESSION['logged_as'] = 'student';
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='../students-site/index.html'
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