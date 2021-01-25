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

Route::group(['namespace'=>'User'],function(){

Route::get('/','HomeController@index');
Route::get('/post/{slug}','PostController@index')->name('post');
Route::get('/post/tag/{tag}','HomeController@tag')->name('tag');
Route::get('/post/category/{category}','HomeController@category')->name('category');
});


Route::group(['namespace'=>'Admin'],function(){

Route::get('admin/home','HomeController@index');
Route::resource('admin/post','PostController');
Route::resource('admin/tag','TagController');
Route::resource('admin/category','CategoryController');
Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login','Auth\LoginController@login');
Route::post('admin-logout','Auth\LoginController@logout')->name('admin.logout');
Route::resource('admin/user','UserController');
Route::resource('admin/role','RoleController');
Route::resource('admin/permission','PermissionController');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
