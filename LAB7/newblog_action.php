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
if(isset($_POST))
{
    if($db)
    {
        //field = micropost -> content, user_id, created_at, updated_at, likes
        $id = $_SESSION['id'];
        $content = $_POST['blog_content'];
        $query = "INSERT INTO microposts (content, user_id, created_at, updated_at, likes) VALUES ('$content', '$id', NOW(), NOW(), '0');";
        if(!mysql_query($query, $db))
            showerror();
        $smarty -> assign('MESSAGE', 'SUCCESS: New post submitted');
        $smarty -> display('message_template.tpl');
        mysql_close($db);

}
}
?>