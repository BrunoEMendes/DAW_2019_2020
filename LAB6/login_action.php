<?php
// include 'functions_php.php';
// is_login_valid();
include 'db.php';
include 'functions_php.php';
session_start();
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if($result = is_login_valid($db))
{
    $_SESSION['username'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['id'] = $result['id'];
    $_SESSION['message'] = '';
    header('Location: index.php');
}
else
{
    $array_errors = get_login_error();
    if($_POST['email'] == null)
        $array_errors[get_key_array($array_errors, 0)] = "empty";
    if(is_login_email_valid($db) >= 1)
        $array_errors[get_key_array($array_errors, 1)] = $_POST['email'];
    if($_POST['password'] == null)
        $array_errors[get_key_array($array_errors, 2)] = "empty";
    if(is_login_email_valid($db) && $_POST['password'] != null)
        $array_errors[get_key_array($array_errors, 3)] = "error";
    header('Location: login.php?'.base64_encode(serialize($array_errors)));
}
mysql_close($db);
// $array_register_error = array(
//     'email is empty' => "",
//     'email doesnt exist' => "",
//     'password field is empty' => "",
//     'email and password do not match' => "",);
// return $array_register_error;
?>
