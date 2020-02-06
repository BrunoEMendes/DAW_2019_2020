<?php
include 'db.php';
session_start();
// put full path to Smarty.class.php
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
// ligação à base de dados
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$errors_coded = parse_url($actual_link, PHP_URL_QUERY);
if($errors_coded)
    $post_id = explode("=", $errors_coded)[1];
//se o url for null
$smarty -> assign('Menu_1', 'Home');
$smarty -> assign('Menu_2', $_SESSION['username']);
$smarty -> assign('value_post', '');
$smarty -> assign('action_form', '');
$smarty -> assign('BLOG', '');

if(!$errors_coded)
{
    $smarty -> assign('BLOG', 'write a new post!');
    $smarty -> assign('action_form', 'newblog_action.php');

}
else
{
    $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
    if($db)
    {
        $post_id = explode("=", $errors_coded)[1];
        $id = $_SESSION['id'];

        $query = "select * from microposts where user_id ='$id' AND id='$post_id';";

        if(!($result = @mysql_query($query, $db)))
            showerror();
        $tuple = mysql_fetch_array($result, MYSQL_ASSOC);
        $query = "select * from microposts where id='$post_id';";
        if(!($result2 = @mysql_query($query, $db)))
            showerror();
        $tuple2 = mysql_fetch_array($result2, MYSQL_ASSOC);
        if($_SESSION['id'] == $tuple['user_id'])
        {
            $smarty -> assign('value_post', $tuple['content']);
            $smarty -> assign('action_form', 'updateblog_action.php?micropost='.$post_id);
        }
        else
        {
            $smarty -> assign('BLOG', $tuple2['content']);
            $smarty -> assign('action_form', 'updateblog_action.php?micropost='.$post_id);
        }
    }
}

$smarty -> display('blog_template.tpl');
?>