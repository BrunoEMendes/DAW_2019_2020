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
    $id = $_SESSION['id'];
    if($_POST['autologin'])
    {
        $value = substr(md5(time()),0,32);
        setcookie('rememberMe', $value, time() + (3600 * 24 * 30));
        $query = "UPDATE users SET remember_digest='$value' WHERE id='$id';";
        if($res = !mysql_query($query, $db))
            showerror();
    }
    header('Location: index.php');
}
else
{
    $_SESSION['error_login'] = 1;
    header('Location: login.php');
    // $array_errors = get_login_error();
    // if($_POST['email'] == null)
    //     $array_errors[get_key_array($array_errors, 0)] = "empty";
    // if(is_login_email_valid($db) >= 1)
    //     $array_errors[get_key_array($array_errors, 1)] = $_POST['email'];
    // if($_POST['password'] == null)
    //     $array_errors[get_key_array($array_errors, 2)] = "empty";
    // if(is_login_email_valid($db) && $_POST['password'] != null)
    //     $array_errors[get_key_array($array_errors, 3)] = "error";

}
mysql_close($db);

// $array_register_error = array(
//     'email is empty' => "",
//     'email doesnt exist' => "",
//     'password field is empty' => "",
//     'email and password do not match' => "",);
// return $array_register_error;
?>
