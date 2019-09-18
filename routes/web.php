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
use App\Team;

Route::get('/', function () {
	return Team::find(1)->detail;
    // return view('home');
});

Route::get('/operator/dashboard', function () {
	return view('operator.dashboard');
});
