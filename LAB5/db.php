<?php
// mostra uma mensagem de erro vinda do mysql
function showerror()
{
 die("Error " . mysql_errno() . " : " . mysql_error());
}
$hostname = "example";
$db_name = "example";
$db_user = "example";
$db_passwd = "example";
// faz uma conexão a uma base de dados
function dbconnect($hostname,
$db_name,$db_user,$db_passwd)
{
 $db = @ mysql_connect($hostname, $db_user,$db_passwd);
 if(!$db) {
 die("Nao consigo ligar ao servidor da base de
dados.");
 }
 if(!(@ mysql_select_db($db_name,$db))){
 showerror();
 }
 return $db;
}
?>