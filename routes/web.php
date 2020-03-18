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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Page'], function () {
    Route::get('/', 'HomePage@index');
    Route::get('/about', 'AboutUsPage@index');
    Route::get('/contact', 'ContactPage@index');
    Route::get('/action', 'ActionPage@index');
    Route::get('/payment', 'PaymentPage@index');
    Route::get('/delivery', 'DeliveryPage@index');
    Route::get('/testimonials', 'TestimonialsPage@index');
    Route::get('/price', 'PricePage@index');
    Route::get('/lead', 'LeadPage@index');
});


Route::group(['namespace' => 'Catalog'], function () {
    Route::get('product', 'Product@index');
    Route::get('/single-product/{id}', 'SingleProduct@index');
    Route::post('/search-product', 'SearchProduct@index');
});


Route::group(['namespace' => 'Blog'], function () {
    Route::get('post', 'Post@index');
    Route::get('/single-post/{id}', 'SinglePost@index');
    Route::post('/search-post', 'SearchPost@index');
});


Route::group(['namespace' => 'Cart'], function () {
    Route::match(['get', 'post'], '/cart', 'Cart@index');
    Route::get('/store/{id}', 'StoreCart@store');
    Route::get('/delete/{id}', 'DeleteCart@delete');
    Route::get('/delete-all', 'DeleteCartAll@delete');
    Route::match(['get', 'post'], '/yandex/{total}', 'Yandex@yandex');
});


Route::group(['namespace' => 'Mail'], function () {
    Route::post('/send-order', 'Order@send');
    Route::post('/send-lead', 'Lead@send');
    Route::post('/send-request-price', 'RequestPrice@send');
    Route::post('/send-request-vacancy', 'RequestPrice@send');
});

