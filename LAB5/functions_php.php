<?php
include 'db.php';

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
function is_Empty($test)
{
    return $test == NULL;
}
function get_register_error()
{
    $array_register_error = array(
        'username is empty' => "",
        'email is empty' => "",
        'email already exists' => "",
        'password field is empty' => "",
        'password confirmation field is empty' => "",
        'passwords dont match' => "");
    return $array_register_error;
}
function is_form_valid($array_test)
{
    return array_search(NULL, $array_test) == true ? false : true;
}
function get_key_array($array_test, $index)
{
    return array_keys($array_test)[$index];
}
function get_value_array($array_test, $index)
{
    return $array_test[array_keys($array_test)[$index]];
}
function insert_value_array($value, $index, $array)
{
    return $array[get_key_array($array, $index)] = $value;
}
function is_email_valid()
{
    global $db;
    if (isset($_POST['reg_user']))
    {
        $email = $_POST['email'];
        $query = "select email from users where email='$email';";
        $result = @ mysql_query($query, $db);
        $nrows = mysql_num_rows($result);
        for($i = 0;  $i < $nrows; $i++)
            $tuple[$i] = mysql_fetch_array($result, MYSQL_ASSOC);
        return $tuple == NULL && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    }
}

mysql_close($db);
?>