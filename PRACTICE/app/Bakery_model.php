<?php
namespace App;
use Illuminate\Support\Facades\DB;
class Bakery_model
{
    public static function get_products()
    {
        return DB::select("SELECT * FROM products ORDER BY price ASC");
    }

    public static function get_categories()
    {
        return DB::select("SELECT  * FROM categories ORDER BY name");
    }


    public static  function get_product_category($id)
    {
        return DB::select("SELECT * FROM products WHERE cat_id='$id' ORDER BY price ASC");
    }

    public static function login($email, $password)
    {
        $result = DB::select("SELECT * FROM users WHERE email='$email' AND password_digest='$password'");
        return $result;
    }

    public static function register_user($username, $email, $password)
    {
        DB::insert("INSERT INTO users (name, email, created_at, updated_at, password_digest) VALUES ('$username', '$email', NOW(), NOW(), '$password');");
        return true;
    }


}
?>