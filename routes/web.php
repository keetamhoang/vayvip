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

// admin
Route::group(['prefix' => 'admin',
    'middleware' => ['admin']
], function () {
    Route::get('/', 'Backend\HomeController@index');

    Route::get('users', 'Backend\UserController@index');
    Route::get('userAttribute.data', 'Backend\UserController@userAttribute');
    Route::get('users/{id}', 'Backend\UserController@edit');
    Route::post('users/update', 'Backend\UserController@update');

    Route::get('posts', 'Backend\PostController@index');
    Route::get('posts/add', 'Backend\PostController@create');
    Route::get('posts/{id}', 'Backend\PostController@edit');
    Route::post('posts/store', 'Backend\PostController@store');
    Route::post('posts/update', 'Backend\PostController@update');
    Route::get('postAttribute.data', 'Backend\PostController@postAttribute');

    Route::get('categories', 'Backend\CategoryController@index');
    Route::get('categories/add', 'Backend\CategoryController@create');
    Route::get('categories/{id}', 'Backend\CategoryController@edit');
    Route::post('categories/store', 'Backend\CategoryController@store');
    Route::post('categories/update', 'Backend\CategoryController@update');
    Route::get('categoryAttribute.data', 'Backend\CategoryController@categoryAttribute');



    Route::get('users', 'Backend\UserController@index');
    Route::get('users/add', 'Backend\UserController@create');

    Route::get('lien-he', 'Backend\HomeController@lienHe');
    Route::get('lienHeAttribute.data', 'Backend\HomeController@lienHeAttribute');

    Route::get('customers', 'Backend\CustomerController@index');
    Route::get('customerAttribute.data', 'Backend\CustomerController@customerAttribute');
    Route::get('customers/delete/{id}', 'Backend\CustomerController@delete');

    Route::get('discounts', 'Backend\DiscountController@index');
    Route::get('discounts/{id}', 'Backend\DiscountController@detail');
    Route::get('discounts/set-banner/{id}', 'Backend\DiscountController@setBanner');
    Route::get('discountAttribute.data', 'Backend\DiscountController@discountAttribute');
    Route::get('discounts/delete/{id}', 'Backend\DiscountController@delete');
});

// auth
Route::get('dang-nhap', 'Backend\AuthController@loginView');
Route::post('login', 'Backend\AuthController@login');
Route::get('dang-ky', 'Backend\AuthController@registerView');
Route::post('register', 'Backend\AuthController@register');
Route::get('logout', 'Backend\AuthController@logout');

// upload image
Route::get('uploadPhoto', ['as' => 'uploadPhoto', 'uses' => 'Frontend\HomeController@guiLienHe']);

// frontend
Route::get('/', 'Frontend\HomeController@index');
Route::get('vay-von-tin-dung', 'Frontend\VayVonController@index');
Route::get('tin-tuc', 'Frontend\NewsController@index');
Route::get('khuyen-mai', 'Frontend\KmController@index');
Route::get('san-pham', 'Frontend\SpController@index');
Route::get('dau-tu', 'Frontend\DtController@index');

Route::get('khuyen-mai/moi-nhat', 'Frontend\KmController@newest');
Route::get('khuyen-mai/coupon', 'Frontend\KmController@coupon');
Route::get('khuyen-mai/tim-kiem', 'Frontend\KmController@search');
Route::get('khuyen-mai/{slug}-{id}', 'Frontend\KmController@detail')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);
Route::get('khuyen-mai/danh-muc/{slug}-{id}', 'Frontend\KmController@category')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

Route::get('generate', 'Frontend\NewsController@generateForm');
Route::post('dang-ky/thong-tin', 'Frontend\HomeController@registerForm');

Route::get('tin-tuc/{slug}-{id}', 'Frontend\NewsController@detail')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

Route::post('dang-ky-khoan-vay', 'Frontend\VayVonController@registerCustomer');
Route::post('dang-ky/popup/voucher', 'Frontend\HomeController@registerCustomer');

Route::get('gg-sheet', 'Frontend\HomeController@ggSheet');