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
Route::get('admin/home', 'Admin\Adminpanel@index')->name('admin.home');

Route::resource('admin/department', 'Admin\Crud\Department', ['as' => 'admin']);
Route::resource('admin/courses', 'Admin\Crud\Courses', ['as' => 'admin']);
Route::resource('admin/batchdays', 'Admin\Crud\BatchDays', ['as' => 'admin']);
