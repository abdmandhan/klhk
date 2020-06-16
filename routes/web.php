<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('web_status', 'WebMonitoringController@web_status')->name('web_status');
Route::get('details/{id}', 'WebMonitoringController@details')->name('details');

Route::group([
    'middleware'    => ['web', 'auth'],
], function () {
    Route::resource('web', 'WebController');
    Route::resource('eselon', 'EselonController');
    Route::resource('web_category', 'WebCategoryController');
    Route::resource('web_monitoring', 'WebMonitoringController');
});
