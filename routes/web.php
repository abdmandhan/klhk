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
    return view('auth.login');
});

// Route::get('/admin/profil', 'AdminController@index');
// Route::post('/admin/create', 'AdminController@create');
// Route::get('/edit/admin', function () {
//     return view('profil.create');
// });

Route::get('/edit', function () {
    return view('profil.edit');
});


Auth::routes();


Route::get('web_status', 'WebMonitoringController@web_status')->name('web_status');


Route::group([
    'middleware'    => ['web', 'auth', 'CheckRole:superadmin']
], function () {
    Route::resource('admin', 'AdminController');
});

Route::group([
    'middleware'    => ['web', 'auth', 'CheckRole:admin,user,superadmin']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::group([
    'middleware'    => ['web', 'auth', 'CheckRole:admin,user']
], function () {
    Route::resource('web', 'WebController');
    Route::resource('eselon', 'EselonController');
    Route::resource('web_category', 'WebCategoryController');
    Route::resource('web_monitoring', 'WebMonitoringController');
});
