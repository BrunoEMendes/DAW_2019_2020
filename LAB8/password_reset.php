<?php
include 'db.php';
session_start();
// put full path to Smarty.class.php
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty -> assign('menu_1', 'Home');
$smarty -> assign('menu_2', 'Login');
$smarty -> assign('menu_3', 'Register');
$smarty -> assign('menu_1_href', 'index.php');
$smarty -> assign('menu_2_href', 'login.php');
$smarty -> assign('menu_3_href', 'register.php');
// ligação à base de dados
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if(isset($_SESSION['error_email']) && $_SESSION['error_email'] == 1)
{
    $smarty -> assign('errors_pw', 'email does not exist');
    $_SESSION['error_email'] = 0;
}
$smarty -> display('password_reset.tpl');
?>