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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'App\Http\Controllers\AdminController@formLogin')->name('login');
Route::post('login', 'App\Http\Controllers\AdminController@login');
Route::get('blog', 'App\Http\Controllers\BlogController@index');

// admin
Route::group(['middleware' => 'auth', 'middleware' => 'is_admin'], function () {
    Route::get('admin/dashboard', 'App\Http\Controllers\AdminController@index')->name('dashboard');
    Route::resource('admin/post', 'App\Http\Controllers\PostController');
    Route::get('admin/api.post', 'App\Http\Controllers\PostController@apiPost');
});

// member
Route::group (['middleware' => 'auth'], function (){
    Route::get('member/dashboard', 'App\Http\Controllers\UserController@index')->name('memberDashboard');
    Route::get('logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
});

