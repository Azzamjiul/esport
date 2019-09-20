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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('home')->group(function () {
    Route::resource('detail_tim','DetailTimController');
    Route::post('detail_tim/simpan_permanen', 'DetailTimController@simpan_permanen')->name('detail_tim.simpan_permanen');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/operator/dashboard', function () {
	return view('operator.dashboard');
});

Route::get('/operator/home', 'OperatorController@index');
Route::get('/operator/detail/{id}', 'OperatorController@detail')->name('detail');
