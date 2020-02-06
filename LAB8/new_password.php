<?php
include 'db.php';
session_start();
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty -> assign('Menu_1', 'Home');
$smarty -> assign('Menu_2', 'Login');
$smarty -> assign('Menu_3', 'Register');
$smarty -> assign('Menu_1_href', 'index.php');
$smarty -> assign('Menu_2_href', 'login.php');
$smarty -> assign('Menu_3_href', 'register.php');
$token = $_GET['token'];
$smarty -> assign('TOKEN', "$token");
$_SESSION['token'] = $token;
if($_SESSION['pw_wrong'] == 1)
{
    $smarty -> assign('password_both_error', 'passwords dont match');
    $_SESSION['pw_wrong'] = 0;
}

$smarty -> display('new_password_template.tpl');
?>