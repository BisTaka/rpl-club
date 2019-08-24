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
    // return view('welcome');
    return "INI TULISAN";
});

Route::get('bisman', function () {
    // return view('welcome');
    return "INI TULISAN BISMAN";
});

Route::get('angka/{var}', function ($var) {
    return $var;
});

Route::get('pangkat/{angka}', function ($angka) {
    $hasil = $angka * $angka;
    return $hasil;

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
