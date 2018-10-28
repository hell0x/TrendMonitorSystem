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
    //登录
    $router->get('login', 'LoginController@showLoginForm');
    $router->post('login', 'LoginController@login')->name('admin.login');
    $router->get('logout', 'LoginController@logout')->name('admin.logout');

    $router->get('index', 'IndexController@index');

    //权限
    $router->get('permission/index', 'PermissionController@index')->name('admin.permission.index');
    $router->get('permission/create', 'PermissionController@create')->name('admin.permission.create');
//    Route::resource('permissions', 'PermissionController');

    //角色
    $router->get('role/index', 'RoleController@index')->name('admin.role.index');

    //后台用户
    $router->get('adm_user/index', 'AdmUserController@index')->name('admin.adm_user.index');
});
