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
Route::post('/filter_book', 'BookController@filter_book')->name('filter_book');
Route::post('/addtocart', 'BookController@addtocart')->name('addtocart');
Route::post('/removecart', 'BookController@removecart')->name('removecart');
Route::get('/shoppingcart', 'BookController@shoppingcart')->name('shoppingcart');
Route::get('/mercadopago_checkout', 'BookController@mercadopago_checkout')->name('mercadopago_checkout');
Route::post('/create_order', 'BookController@create_order')->name('create_order');
Route::get('/create_pdf', 'BookController@create_pdf')->name('create_pdf');
Route::get('/download_pdf/{guid}', 'BookController@download_pdf')->name('download_pdf');
Route::get('/test', 'BookController@test')->name('test');
