<?php
namespace App\Http\Controllers;

use ___PHPSTORM_HELPERS\object;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Product_model;
use Session;
use Cookie;


class eStore extends Controller
{
    public function index()
    {
        // if(Cookie::get('siteAuth'));
        // var_dump()
        if(cookie('siteAuth'))
        {
            $cookie_user = Product_model::get_cookie(Cookie::get('siteAuth'));
            if($cookie_user)
            {
                session(['id' => $cookie_user[0]->{'id'}]);
                session(['name' => $cookie_user[0]->{'name'}]);
            }
        }

        $product = Product_model::get_products();
        return view('index', compact('product'));
    }

    public function register()
    {
        return view('register_template');
    }

    public function register_action()
    {
        $rules = array(
            'username' => 'required',
            'email' => 'required|unique:customers|max:255',
            'password_1' => 'required| required_with:password_2|same:password_2',
            'password_2' => 'required',
        );
        $request_arr = (array) $_REQUEST;
        $validator = Validator::make($request_arr, $rules);
        if($validator->fails())
            return Redirect::back() -> withErrors($validator) -> withInput();

        $username = request('username');
        $email = request('email');
        $password = substr(md5(request('password_1')),0,32);
        Product_model::register_user($username, $email, $password);
        return redirect('/message') -> with('message', 'I was feeling lonely, thanks for being my friend');
    }

    public function store($id = FALSE)
    {
        if($id)
        {
            $product = Product_model::get_product_category($id);
            return view('store_template', compact('product', 'id'));
        }
        else
        {
            $product = Product_model::get_products();
            return view('store_template', compact('product'));
        }
    }


    public function detail($id = FALSE)
    {
        if($id)
        {
            $product = Product_model::get_pepe($id);
            return view('detail_template', compact('product', 'id'));
        }
        else
            return redirect('/message') -> with('message', "You are not welcome here, please leave");
    }

    public function checkout()
    {

        if(isset($_COOKIE['checkout']))
        {
            $dict = $_COOKIE["checkout"];
            $data = json_decode($dict, true);
            $total = 0;
            // var_dump(($data));
            $orders = [];
            foreach ($data as $key => $value) {
                $model_result = Product_model::get_product($key);
                $total += intval($model_result[0]->{'price'} * intval($data[$key]));
                $resultArray = json_decode(json_encode($model_result), true);
                $resultArray[0]['amount'] = $data[$key];
                // var_dump($resultArray);
                // var_dump($model_result);
                array_push($orders, $resultArray);
            }

            // els
            if(count($orders) == 0)
                return view('checkout_template');

            // // $orders = (object)$orders;
            // // $orders = json_decode(json_encode($orders), FALSE);
            // // $orders = ((object)$orders);
            // // return view('checkout_template', compact('orders', 'total'));
            // // $orders = $resultArray;
            // // var_dump($orders);

        }
        // var_dump(Session::get('test'));

        return view('checkout_template', compact('orders', 'total'));
        // $data = preg_replace_callback('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $dict);
        // var_dump(unserialize($data));
    }

    public function checkout_action()
    {
        if(isset($_COOKIE['checkout']))
        {
            $dict = $_COOKIE["checkout"];
            $data = json_decode($dict, true);
            $total = 0;
            // var_dump(($data));
            $orders = [];
            foreach ($data as $key => $value) {
                $model_result = Product_model::get_product($key);
                $total += intval($model_result[0]->{'price'} * intval($data[$key]));
                $resultArray = json_decode(json_encode($model_result), true);
                $resultArray[0]['amount'] = $data[$key];
                // var_dump($resultArray);
                // var_dump($model_result);
                array_push($orders, $resultArray);
            }

            Product_model::create_order(Session::get('id'), 0, $total);


            $order_id = Product_model::get_last_order()->{'id'};

            //inserts values into order_itens
            foreach($data as $key => $value)
            {
                $model_result = Product_model::get_product($key)[0];
                Product_model::create_order_item($order_id, $model_result -> {'id'}, intval($data[$key]));
            }



            // if(count($orders) == 0)
            //     return view('checkout_template');


            // // $orders = (object)$orders;
            // // $orders = json_decode(json_encode($orders), FALSE);
            // // $orders = ((object)$orders);
            // // return view('checkout_template', compact('orders', 'total'));
            // // $orders = $resultArray;
            // // var_dump($orders);

        }
        return redirect('/message') -> with('message', "THANKS FOR ADOPTING OUR SAD BOIS");
    }


    public function orders()
    {
        $order = Product_model::get_orders(Session::get('id'));
        $order_items = Product_model::get_order_item(Session::get('id'));
        $product = Product_model::get_all_products();
        // var_dump($order_items);
        return view('orders_template', compact('order', 'order_items', 'product'));
    }



    public function login()
    {
        return view('login_template');
    }
    public function login_action()
    {
        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
        $request_arr = (array)$_REQUEST;
        $validator = Validator::make($request_arr, $rules);
        if($validator->fails())
            return Redirect::back() -> withErrors($validator);

        $email = request('email');
        $password = substr(md5(request('password')),0,32);
        $results = Product_model::login($email, $password);
        if(!$results)
            return redirect('/login') -> with('login_fail', 'Email and Password dont match!');
        else
        {
            session(['id' => $results[0]->{'id'}]);
            session(['name' => $results[0]->{'name'}]);
            $name = $results[0]->{'name'};
            if(request('autologin'))
            {
                $cookie_name = 'siteAuth';
                $cookie_time = (60 * 24 * 30); // 30 days
                $remember_digest = substr(md5(time()),0,32);
                $cookie = Cookie::make($cookie_name, $remember_digest, $cookie_time);
                Product_model::set_remember_digest($email, $remember_digest);
                return redirect('/message') -> with('message', "Hey $name, I though you went to get cigarettes like my father did, I still havent seen him till this day :(")->cookie($cookie);

            }
            return redirect('/message') -> with('message', "Hey $name, I though you went to get cigarettes like my father did, I still havent seen him till this day :(");
        }
    }

    public function logout()
    {
        session()->flush();
        Cookie::queue('siteAuth', '');
        return redirect('/message') -> with('message', "I though we were friends :(");
    }

    public function message()
    {
        return view('message_template');
    }
}
?>