<?php
include 'db.php';
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
$smarty -> assign('posts', $tuple);
$smarty -> display('index_template.tpl');
// fechar a ligação à base de dados
 mysql_close($db);
 ?>