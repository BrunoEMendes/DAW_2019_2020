<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Bakery_model;
use Session;
use Cookie;

class Bakery extends Controller
{
    public function index()
    {

        $products = Bakery_model::get_products();

        // if(Cookie::get('siteAuth'));
        // var_dump()
        // if(cookie('siteAuth'))
        // {
        //     $cookie_user = Blog_model::get_cookie(Cookie::get('siteAuth'));
        //     if($cookie_user)
        //     {
        //         session(['id' => $cookie_user[0]->{'id'}]);
        //         session(['name' => $cookie_user[0]->{'name'}]);
        //     }
        // }
        $categories = Bakery_model::get_categories();
        return view('index_template', compact('products', 'categories'));
    }

    public function menu($id = FALSE)
    {

        $categories = Bakery_model::get_categories();
        $products = Bakery_model::get_product_category($id);
        return view('index_template', compact('products', 'categories'));
    }

    public function register()
    {
        return view('register_template');
    }

    public function register_action()
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password1' => 'required| required_with:password2|same:password2',
            'password2' => 'required',
        );
        $request_arr = (array) $_REQUEST;
        $validator = Validator::make($request_arr, $rules);
        if($validator->fails())
            return Redirect::back() -> withErrors($validator) -> withInput();

        $username = request('username');
        $email = request('email');
        $password = substr(md5(request('password_1')),0,32);
        Bakery_model::register_user($username, $email, $password);
        return redirect('/message') -> with('message', 'I was feeling lonely, thanks for being my friend');
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
        $results = Bakery_model::login($email, $password);
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