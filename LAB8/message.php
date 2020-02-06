<?php
include 'db.php';
session_start();
// put full path to Smarty.class.php
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
if($_GET['code'] == 1)
    $smarty -> assign('MESSAGE','Password reset activated! <br> Email sent to you :-)');
if($_GET['code'] == 2)
    $smarty -> assign('MESSAGE', 'Password reset successfully!');
if($_GET['code'] == 3)
    $smarty -> assign('MESSAGE','ERROR: WRONG TOKEN OR TOKEN EXPIRED, PASSWORD RESET FAILED!');

$smarty -> display('message_template.tpl');


?>