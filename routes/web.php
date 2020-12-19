<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Session()->has('id_user')) {
        return view('backend.home');
    } else {
        return view('backend.login.index');
    }
});
// authentication
Route::post('/auth', 'LoginController@login')->name('login')->middleware('ceklogin');
Route::get('/exit', 'LoginController@logout')->name('keluar');
// tutup auth