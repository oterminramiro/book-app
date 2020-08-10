<?php

use Illuminate\Support\Facades\Route;
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

# Landing page
Route::get('/', function () {return view('main/index');});
# Auth routes
Auth::routes();

# Products list
Route::get('/index', 'BookController@index')->name('index');
Route::post('/addtocart', 'BookController@addtocart')->name('addtocart');
Route::get('/shoppingcart', 'BookController@shoppingcart')->name('shoppingcart');
