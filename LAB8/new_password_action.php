<?php
include 'db.php';
session_start();
require('/usr/share/php/smarty/libs/Smarty.class.php');

$pw_1 = $_POST['password_1'];
$pw_2 = $_POST['password_2'];
$token = $_POST['token'];
if($pw_1 != $pw_2)
{
    $_SESSION['pw_wrong'] = 1;
    header('Location: new_password.php?token='.$_SESSION['token']);
}
else
{
    $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
    if($db)
    {
        $password = substr(md5($_POST['password_1']),0,32);

        $query = "UPDATE users SET password_digest='$password' WHERE reset_digest='$token'";
        $query_1 = "SELECT * FROM users WHERE reset_digest='$token';";
        if(!($result_1 = mysql_query($query_1, $db)))
        {
            // header('Location: message.php?code=3');
        }
        $tuple_1 = mysql_fetch_array($result_1, MYSQL_ASSOC);
        $date_test = new DateTime($tuple_1['reset_sent_at']);
        $date_test -> modify('+1day');
        $date_today = new DateTime($time = 'now');
        if($date_today > $date_test)
            header('Location: message.php?code=3');
        else if(!$tuple_1['email'])
            header('Location: message.php?code=3');
        else
        {
            if(!($result = mysql_query($query, $db)))
            {
                header('Location: message.php?code=3');
            }
            $tuple = mysql_fetch_array($result, MYSQL_ASSOC);
            header('Location: message.php?code=2');
        }

    }
}
$smarty -> display('new_password_template.tpl');

?>