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


Route::get('/', 'Bakery@index');
Route::get('/menu/{id}', 'Bakery@menu');
Route::get('/login', 'Bakery@login');
Route::post('/login_action', 'Bakery@login_action');
Route::get('/register', 'Bakery@register');
Route::post('/register_action', 'Bakery@register_action');
Route::get('/logout', 'Bakery@logout');
Route::get('/message', 'Bakery@message');

