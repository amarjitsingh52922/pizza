<?php
//https://www.techiediaries.com/php-laravel-crud-mysql-tutorial/
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

Route::get('/', function () {
    return view('menu');
})->name('menu');

Route::get('/cart',function(){
    return view('cart');
})->name('cart');

Route::get('/address','AddressController@create')->name('address');
Route::post('/address','AddressController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
