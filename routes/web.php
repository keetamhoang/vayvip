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
Route::post('dang-ky-khoan-vay', 'Frontend\VayVonController@registerCustomer');