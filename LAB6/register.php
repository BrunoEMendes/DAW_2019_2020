<?php
include 'functions_php.php';
include 'db.php';
// put full path to Smarty.class.php
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

//variables
$username = "";
$email = "";
$errors = array();

// ligação à base de dados
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$errors_coded = parse_url($actual_link, PHP_URL_QUERY);
$errors_decoded = base64_decode($errors_coded);
$errors_array = unserialize($errors_decoded);

$name = $_POST["username"] = 'username';
if($errors_coded == NULL)
    $smarty -> display('register_template.tpl');

if(!is_form_valid($errors_array)){
    if(!get_value_array($errors_array, 0))
        $smarty -> assign('username_error', get_key_array($errors_array, 0));
    $smarty -> assign('username_value', get_value_array($errors_array, 0));
    if(!get_value_array($errors_array, 1))
        $smarty -> assign('email_error', get_key_array($errors_array, 1));
    else if(!get_value_array($errors_array, 2))
        $smarty -> assign('email_error', get_key_array($errors_array, 2));
    else
        $smarty -> assign('email_value', get_value_array($errors_array, 2));
    if(!get_value_array($errors_array, 3))
        $smarty -> assign('password_1_error', get_key_array($errors_array, 3));
    if(!get_value_array($errors_array, 4))
        $smarty -> assign('password_2_error', get_key_array($errors_array, 4));
    if(!get_value_array($errors_array, 5))
        $smarty -> assign('password_both_error', get_key_array($errors_array, 5));
    $smarty -> display('register_template.tpl');

}
else if($errors_coded === '0')
{
    $smarty -> display('register_success.tpl');
}

//0 -> username empty
//1 -> email empty
//2 -> email exist
//3 -> password_1 empty
//4 -> password_2 empty
//5 -> passowrds dont match

// fechar a ligação à base de dados
 ?>