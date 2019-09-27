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
    return view('index');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::prefix('peserta')->name('peserta.')->middleware('peserta')->group(function () {
    Route::resource('', 'PesertaController');
    Route::post('simpan_tim_permanen', 'PesertaController@simpan_tim_permanen')->name('simpan_tim_permanen');
    Route::post('upload_bukti', 'PesertaController@upload_bukti')->name('upload_bukti');
});

Route::prefix('operator')->name('operator.')->middleware('operator')->group(function () {
    // dashboard
    Route::get('dashboard', function () {return view('operator.dashboard');})->name('dashboard');

    // Match
    Route::get('match', 'OperatorController@match')->name('matchs');
    Route::get('match_detail/{id}', 'OperatorController@match_detail')->name('match_detail');

    // pembayaran
    Route::post('validation/{id}', 'OperatorController@validation')->name('validasi_pembayaran');

    // team validation
    Route::get('team', 'OperatorController@teams')->name('teams');
    Route::get('team/{id}', 'OperatorController@team')->name('team_detail');
    Route::post('verif/{id}', 'OperatorController@verify')->name('verifikasi_detail_team');
    Route::post('verifikasi_tim/{id}', 'OperatorController@verifikasi_tim')->name('verifikasi_tim');
});