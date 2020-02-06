<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'eStore@index');
Route::get('/login', 'eStore@login');
Route::post('/login_action', 'eStore@login_action');
Route::get('/register', 'eStore@register');
Route::post('/register_action', 'eStore@register_action');
Route::get('/logout', 'eStore@logout');
Route::get('/message', 'eStore@message');
Route::get('/store', 'eStore@store');
Route::get('/store/{number}', 'eStore@store');
Route::get('/detail', 'eStore@detail');
Route::get('/detail/{number}', 'eStore@detail');
Route::get('/checkout', 'eStore@checkout');
Route::any('/checkout_action', 'eStore@checkout_action');
Route::get('/orders', 'eStore@orders');


