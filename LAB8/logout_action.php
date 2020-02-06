<?php
session_start();
setcookie("rememberMe");
session_destroy();
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty -> assign('MESSAGE', 'See you back soon!');
$smarty -> display('message_template.tpl')
?>