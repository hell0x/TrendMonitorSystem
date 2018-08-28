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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Back'], function ($router) {
    $router->get('login', 'LoginController@showLoginForm');
    $router->post('login', 'LoginController@login')->name('admin.login');
    $router->get('logout', 'LoginController@logout')->name('admin.logout');

    $router->get('index', 'IndexController@index');
});
