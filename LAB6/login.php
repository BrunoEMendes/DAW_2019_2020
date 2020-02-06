<?php
include 'functions_php.php';
// put full path to Smarty.class.php
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$errors_coded = parse_url($actual_link, PHP_URL_QUERY);
$errors_decoded = base64_decode($errors_coded);
$errors_array = unserialize($errors_decoded);

if($errors_array)
{
    if(get_value_array($errors_array, 3))
        $smarty -> assign('errors_pw', get_key_array($errors_array, 3));
    else
    {
        if(!get_value_array($errors_array, 1) && !get_value_array($errors_array, 0))
            $smarty -> assign('errors_email', get_key_array($errors_array, 1));
        else
        {
            if(get_value_array($errors_array, 1))
                $smarty -> assign('login_email_value', get_value_array($errors_array, 1));
            else if(!get_value_array($errors_array, 0))
                $smarty -> assign('errors_email', get_key_array($errors_array, 0));
            if(get_value_array($errors_array, 2) != null && get_value_array($errors_array, 1))
                $smarty -> assign('errors_pw', get_key_array($errors_array, 2));
            else
                $smarty -> assign('errors_email', get_key_array($errors_array, 0));
        }
    }
}
$smarty -> display('login_template.tpl');
?>