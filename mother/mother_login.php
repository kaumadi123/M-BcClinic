 <?php
        //  session_start();
        if (!isset($_SESSION))
                session_start();

        require('sql_connect.php');
        if (isset($_POST['submit'])) {

                $username = mysql_escape_string($_POST['username']);
                $password = mysql_escape_string($_POST['password']);

                if (!$_POST['username'] | !$_POST['password']) {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='index.html'
        </SCRIPT>");
                        exit();
                }

                //      $sql="SELECT 'sid',nic FROM `mother_register` WHERE `userName` = '$username' AND `pass` = '$password'";
                $sql = mysql_query("SELECT sid,nic FROM `mother_register` WHERE `userName` = '$username' AND `pass` = '$password'");
                // $sql= mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
                // $result = mysqli_query($conn,$sql);
                if (mysql_num_rows($sql) > 0) {
                        $login_user = mysql_fetch_assoc($sql);
                        $_SESSION['username'] = $login_user['sid'];

                        $_SESSION['nic'] = $login_user['nic'];
                        $_SESSION['logged_as'] = 'mother';



                        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='panel/index.php'
        </SCRIPT>");
                        exit();
                } else {
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='index.html'
        </SCRIPT>");
                        exit();
                }
        } else {
        }
        ?>
 