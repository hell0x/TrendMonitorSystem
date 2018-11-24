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

    $router->get('index', 'IndexController@index')->name('admin.index');

    /************************ 热点start **********************/
    //来源配置
    Route::resource('sources', 'SourceController');
    /************************ 热点end **********************/

    /************************ 因素管理start **********************/
    //因素配置
    Route::resource('factors', 'FactorController');
    /************************ 因素管理end **********************/

    /************************ 影响力预估start **********************/
    /************************ 影响力预估end **********************/

    /************************ 文章管理start **********************/
    /************************ 文章管理end **********************/

    /************************ 用户管理start **********************/
    //权限
    Route::resource('permissions', 'PermissionController');
    //角色
    Route::resource('roles', 'RoleController');
    //后台用户
    Route::resource('adm_users', 'AdmUserController');
    /************************ 用户管理end **********************/
});

