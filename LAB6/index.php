<?php
include 'db.php';
session_start();
// put full path to Smarty.class.php
require('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
// ligação à base de dados
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if($db)
{
    $query = 'select u.name, m.content, m.created_at, m.updated_at, m.likes from users as u, microposts as m where u.id = m.user_id order by updated_at desc;';
    // $query = 'select * from microposts;';

    if(!($result = @mysql_query($query, $db)))
        showerror();

    $nrows = mysql_num_rows($result);
    for($i = 0;  $i < $nrows; $i++)
        $tuple[$i] = mysql_fetch_array($result, MYSQL_ASSOC);
    // var_dump($tuple);
}

// var_dump($_SESSION);
if($_SESSION)
{
    $smarty -> assign('menu_1', 'WELCOME');
    $smarty -> assign('menu_1_redirect', 'index.php');
    $smarty -> assign('menu_2', $_SESSION['username']);
    $smarty -> assign('menu_2_redirect', 'profile.php');
    $smarty -> assign('menu_3', 'Logout');
    $smarty -> assign('menu_3_redirect', 'logout_action.php');
    $smarty -> assign('CONTENT_HREF', 'blog.php?micropost_id='.$_SESSION['id']);
    $smarty -> assign('CONTENT', 'BLOG');

}
else
{
    $smarty -> assign('menu_1', 'Home');
    $smarty -> assign('menu_1_redirect', 'index.php');
    $smarty -> assign('menu_2', 'Login');
    $smarty -> assign('menu_2_redirect', 'login.php');
    $smarty -> assign('menu_3', 'Register');
    $smarty -> assign('menu_3_redirect', 'register.php');
    $smarty -> assign('CONTENT', 'BLOG!');
    $smarty -> assign('CONTENT_HREF', 'index.php');

}
$smarty -> assign('posts', $tuple);
$smarty -> display('index_template.tpl');
// $smarty -> display('register_template.tpl');

// fechar a ligação à base de dados
 mysql_close($db);
 ?>