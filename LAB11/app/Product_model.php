<?php
namespace App;
use Illuminate\Support\Facades\DB;
class Product_model
{

    public static function get_products()
    {
        return DB::select("SELECT * FROM products ORDER BY price");
    }

    public static  function get_product_category($id)
    {
        return DB::select("SELECT * FROM products WHERE cat_id='$id'");
    }

    public static function login($email, $password)
    {
        $result = DB::select("SELECT * FROM customers WHERE email='$email' AND password_digest='$password'");
        return $result;
    }

    public static function register_user($username, $email, $password)
    {
        DB::insert("INSERT INTO customers (name, email, created_at, updated_at, password_digest) VALUES ('$username', '$email', NOW(), NOW(), '$password');");
        return true;
    }

    public static function get_pepe($id)
    {
        return DB::select("SELECT * FROM products WHERE id='$id'");
    }

    public static function get_cookie($remember_digest)
    {
        return DB::select("SELECT * FROM customers WHERE remember_digest='$remember_digest';");
    }

    public static function get_product($name)
    {
        return DB::select("SELECT * FROM products WHERE name='$name'");
    }

    public static function create_order($id, $status, $total)
    {
        DB::insert("INSERT INTO orders (customer_id, created_at, status, total) VALUES ('$id', NOW(), '$status','$total');");
    }

    public static function get_last_order()
    {
        return collect(\DB::select('SELECT * FROM orders ORDER BY created_at DESC'))->first();
    }

    public static function create_order_item($o_id, $p_id, $qt)
    {
        DB::insert("INSERT INTO order_items(order_id, product_id, quantity) VALUES ('$o_id', '$p_id', '$qt')");
    }

    public static function get_orders($id)
    {
        return DB::select("SELECT * FROM orders WHERE customer_id = '$id' ORDER BY created_at DESC");
    }

    public static function get_order_item($id)
    {
        return DB::select("SELECT o.id as id, oi.product_id as pid, oi.quantity as qt  FROM order_items as oi, orders as o WHERE o.customer_id = '$id' AND o.id = oi.order_id ORDER BY oi.order_id DESC");
    }

    public static function get_all_products()
    {
        return DB::select("SELECT * FROM products");
    }

    public static function set_remember_digest($email,$remember_digest)
    {
        DB::update("UPDATE users SET remember_digest='$remember_digest' WHERE email='$email';");
        return true;
    }
}