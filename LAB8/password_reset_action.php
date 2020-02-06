<?php
include 'db.php';
session_start();
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if(isset($_SESSION['error']) && $_SESSION['error'] == 1)
{
    $smarty -> assign('errors_pw', 'email does not exist');
    $_SESSION['error'] = 0;
}
if(isset($_POST['email']))
    if($db)
    {
        $email = $_POST['email'];
        $query = "SELECT * FROM users WHERE email='$email';";
        if(!($result = mysql_query($query, $db)))
                showerror();
        $tuple = mysql_fetch_array($result, MYSQL_ASSOC);
        if(!$tuple['email'])
        {
            $_SESSION['error_email'] = 1;
            header('Location: password_reset.php');
        }
        else
        {
            $time = date("Y-m-d H:i:s");
            $reset_digest = substr(md5(time()),0,32);
            $query = "UPDATE users SET reset_digest='$reset_digest', reset_sent_at='$time' WHERE email='$email';";
            if(!($result = mysql_query($query, $db)))
                showerror();

            $subject = 'email reset';
            $name = $tuple['name'];
            $message = "
            Olá Sr.(a) $name
            Para obter uma nova password clique no link

            http://all.deei.fct.ualg.pt/~a62181/LAB8/new_password.php?token=$reset_digest

            Este link tem a validade de uma hora.
            Se NÃO pediu uma nova password IGNORE este email.


            Cumprimentos,
            webmaster!
            Página Web: http://intranet.deei.fct.ualg.pt/~a62181/Lab8/
            E-mail: a12345@deei.fct.ualg.pt
            NOTA: Não responda a este email, não vai obter resposta! ";
            mail($email, $subject , $message);
            header('Location: message.php?code=1');
        }
    }
?>