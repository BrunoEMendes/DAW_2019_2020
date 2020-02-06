<?php
include 'functions_php.php';
include 'db.php';
session_start();
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);

$array_errors = get_register_error();
if(!is_Empty($_POST['username']))
    $array_errors[get_key_array($array_errors, 0)] = $_POST['username'];
if(!is_Empty($_POST['email']))
    $array_errors[get_key_array($array_errors, 1)] = $_POST['email'];
if(is_email_valid($db))
    $array_errors[get_key_array($array_errors, 2)] = $_POST['email'];
if(!is_Empty($_POST['password_1']))
    $array_errors[get_key_array($array_errors, 3)] = "pw1";
if(!is_Empty($_POST['password_2']))
    $array_errors[get_key_array($array_errors, 4)] = "pw2";
if($_POST['password_1'] == $_POST['password_2'])
    $array_errors[get_key_array($array_errors, 5)] = "yeay";
if(is_form_valid($array_errors))
{
    $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
    if($db && !is_Empty($_POST['password_1']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = substr(md5($_POST['password_1']),0,32);
        $query = "INSERT INTO users (name, email, created_at, updated_at, password_digest) VALUES ('$username', '$email', NOW(), NOW(), '$password');";
        if(mysql_query($query, $db)){
            $smarty -> display('register_success.tpl');
        }
    }
    mysql_close($db);
}
else
{
    $url = 'register.php?'.base64_encode(serialize($array_errors));
    // var_dump($url);
    header("Location: $url");
}
mysql_close($db);

// {
//     header('Location: index.php?1');
// }
// else
//     header('Location: register.php?1');
//0 -> username empty
//1 -> email empty
//2 -> email exist
//3 -> password_1 empty
//4 -> password_2 empty
//5 -> passowrds dont match
?>