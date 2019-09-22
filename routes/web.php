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

Route::get('/peserta', 'HomeController@index')->name('home');

Route::prefix('peserta')->group(function () {
    Route::resource('peserta','PesertaController');
    Route::post('peserta/simpan_tim_permanen', 'PesertaController@simpan_tim_permanen')->name('peserta.simpan_tim_permanen');
    Route::post('pembayaran/upload_bukti', 'PesertaController@upload_bukti')->name('peserta.upload_bukti');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/operator/dashboard', function () {
	return view('operator.dashboard');
});

Route::get('/operator/match', 'OperatorController@match');
Route::get('/operator/match_detail/{id}', 'OperatorController@match_detail')->name('detail');
Route::get('/operator/team/{id}', 'OperatorController@team');
Route::get('/verif/{id}', 'OperatorController@verify');
Route::get('/validation/{id}', 'OperatorController@validation');
