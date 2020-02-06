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
$post_id = explode("=", $errors_coded)[1];
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);

if($_SESSION)
{
    if($db)
    {
        $id = $_SESSION['id'];
        $content = $_POST['blog_content'];
        $query = "SELECT * FROM microposts WHERE id='$post_id' AND user_id='$id';";
        $result = mysql_query($query, $db);
        $nrows = mysql_num_rows($result);
        if($nrows == 0)
        {
            $smarty -> assign('MESSAGE','ERROR: Not allowed');
            $smarty -> display('message_template.tpl');
        }
        else
        {
            $query = "UPDATE microposts SET content='$content', updated_at = NOW() WHERE user_id='$id' AND id = '$post_id';";
            if(!mysql_query($query, $db))
                showerror();

            $smarty -> assign('MESSAGE', 'SUCCESS: Post updated');
            $smarty -> display('message_template.tpl');
        }
        mysql_close($db);
    }
    else
    {
        $smarty -> assign('MESSAGE', 'ERROR: Not allowed');
        $smarty -> display('message_template.tpl');
    }
}

?>