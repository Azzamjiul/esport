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

Route::get('/', function () {
    return view('index');
});

Route::get('/pendaftar_internal', function () {
    return view('pendaftar_internal');
})->name('pendaftar.internal');

Route::get('/home', function () {
    return redirect()->route('home');
});

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware(['auth']);;

Route::prefix('peserta')->middleware('auth')->group(function () {
    Route::resource('peserta', 'PesertaController');
    Route::post('simpan_tim_permanen', 'PesertaController@simpan_tim_permanen')->name('peserta.simpan_tim_permanen');
    Route::post('upload_bukti', 'PesertaController@upload_bukti')->name('peserta.upload_bukti');
    Route::post('store_foto_pertandingan/{id}', 'PesertaController@store_foto_pertandingan')->name('peserta.store_foto_pertandingan');
});

Route::prefix('operator')->middleware('operator')->name('operator.')->group(function () {
    // dashboard
    Route::get('dashboard', 'OperatorController@dashboard')->name('dashboard');

    // Match
    Route::get('match', 'OperatorController@match')->name('matchs');
    Route::get('matchin', 'OperatorController@match_internal')->name('matchs_internal');
    Route::get('match_detail/{id}', 'OperatorController@match_detail')->name('match_detail');

    // pembayaran
    Route::post('validation/{id}', 'OperatorController@validation')->name('validasi_pembayaran');

    // team validation
    Route::get('team', 'OperatorController@teams')->name('teams');
    Route::get('team/{id}', 'OperatorController@team')->name('team_detail');
    Route::post('verif/{id}', 'OperatorController@verify')->name('verifikasi_detail_team');
    Route::post('verifikasi_tim/{id}', 'OperatorController@verifikasi_tim')->name('verifikasi_tim');

    //generate pertandingan
    Route::post('generate', 'OperatorController@generate')->name('generate');
    Route::post('generatein', 'OperatorController@generate_internal')->name('generate_internal');
    Route::post('check', 'OperatorController@check')->name('check');
    Route::post('win', 'OperatorController@win')->name('win');

    // Upload Bukti
    Route::post('upload_bukti', 'OperatorController@upload_bukti')->name('upload_bukti');
});

Route::get('/bagan_eksternal', 'MatchController@index')->name('bagan_eksternal');
Route::get('/bagan_internal', 'MatchController@index_internal')->name('bagan_internal');