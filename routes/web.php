<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('layouts.index');
})->name('main');
Route::get('/welcome', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/main', 'DashboardController@index')->name('admin');
    Route::post('/admin/login', 'AdminLoginController@login')->name('admin-login');
    Route::get('/form', 'DashboardController@form')->name('form');
    Route::get('/list', 'DashboardController@list')->name('list');
    Route::get('/sign-in', function (){return view('layouts.admin-login');})->name('sign_in');
    Route::get('/sign-up', function (){return view('layouts.admin-registration');})->name('sign_up');
});
Route::group(['prefix'=>'seller/'],function(){
    Route::get('sign-in',function(){return view('layouts.seller');})->name('seller-login');
});

/* Route::get('/testPage', 'TestController@index')->name('functions'); */
