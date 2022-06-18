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

// Admin
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.page.dashboard');
    });

    Route::get('registered-user','Admin\RegisteredController@index');

    Route::get('/admin_profile', 'ProfileController@index_admin');
    Route::post('/admin_profile', 'ProfileController@update_admin');

    //Produk
    Route::get('products','Admin\BarangController@index');
    Route::get('add-products','Admin\BarangController@create');

    //Riwayat
    Route::get('admin_history', 'HistoryController@index_admin');

});

// Admin



Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');
