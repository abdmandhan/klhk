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
// Route::get('/admin/profil', 'AdminController@index');
// Route::post('/admin/create', 'AdminController@create');
// Route::get('/edit/admin', function () {
//     return view('profil.create');
// });
// Route::resource('admin', 'AdminController');
*/

Route::get('/', function () {
    return view('auth.login'); //login
});


Route::get('/edit', function () {
    return view('profil.edit');
});

Auth::routes();


Route::get('web_status', 'WebMonitoringController@web_status')->name('web_status');


Route::group([
    'middleware'    => ['web', 'auth', 'role:superadmin'] //roleuser
], function () {
    // user management
    Route::resource('user-management', 'UserManagementController');
});

Route::group([
    'middleware'    => ['web', 'auth', 'role:admin|user|superadmin'] //roleuser
], function () {
    Route::get('/home', 'HomeController@index')->name('home'); //dashboard
});
Route::group([
    'middleware'    => ['web', 'auth', 'role:admin|superadmin'] //roleuser
], function () {
    Route::resource('web', 'WebController');
    Route::resource('eselon', 'EselonController');
    Route::resource('web_category', 'WebCategoryController');
    Route::resource('web_monitoring', 'WebMonitoringController');
});

// Tentang
Route::get('/tentang', 'TentangController@index');
Route::get('/tentang/edit/{id}', 'TentangController@edit');
Route::put('/tentang/update/{id}', 'TentangController@update');

// ADMIN
Route::get('/front/cari', 'CariController@index');
Route::post('/front/cari/create', 'CariController@create');
Route::get('/front/cari/{id}/edit', 'CariController@edit');
Route::post('/front/cari/{id}/update', 'CariController@update');
Route::get('/front/cari/{id}/delete', 'CariController@delete');

// CLIENT
Route::get('/front/home', 'PageController@home');
Route::get('/front/eselon/{id}', 'PageController@eselons');
Route::get('/front/categori/{id}', 'PageController@categori');
// Route::get('/front/website', 'PageController@website');
// Route::get('/front/sistem', 'PageController@sistem');
Route::get('/front/ppid/{id}', 'PageController@ppid');
Route::get('/front/hasil', 'PageController@hasil');
Route::get('/front/cari', 'CariController@index');
Route::post('/front/cari/create', 'CariController@create');
Route::get('/front/cari/{id}/edit', 'CariController@edit');
Route::post('/front/cari/{id}/update', 'CariController@update');
Route::get('/front/cari/{id}/delete', 'CariController@delete');

//Website
Route::get('/website', 'WebsiteController@index');
Route::get('/website/create', 'WebsiteController@create');
Route::post('/website', 'WebsiteController@store');
//Route::get('web_status', 'WebsiteController@web_status')->name('web_status');
Route::get('/website/{id}', 'WebsiteController@destroy');
Route::get('/website/{id}/edit', 'WebsiteController@edit');
Route::post('/website/{id}/update', 'WebsiteController@update');
// Route::get('web_status', 'WebsiteController@web_status')->name('web_status');
// Route::get('details/{id}', 'WebsiteController@details')->name('details');
Route::get('/website/{id}/detail', 'WebsiteController@detail');

//Sisteminfo
Route::get('/sistem', 'SistemsController@index');
Route::get('/sistem/create', 'SistemsController@create');
Route::post('/sistem', 'SistemsController@store');
Route::get('/sistem/{id}', 'SistemsController@destroy');
Route::get('/sistem/{id}/edit', 'SistemsController@edit');
Route::post('/sistem/{id}/update', 'SistemsController@update');
Route::get('/sistem/{id}/detail', 'SistemsController@detail');

//dokumentasi
Route::get('/deskripsi', function () {
    return view('tentang');
});
