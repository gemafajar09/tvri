<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Session()->has('id_user')) {
        return redirect('home');
    } else {
        return view('backend.login.index');
    }
});
// authentication
Route::post('/auth', 'LoginController@login')->name('login')->middleware('ceklogin');
Route::get('/exit', 'LoginController@logout')->name('keluar')->middleware('ceklogin');
Route::get('/home', 'HomeController@index')->name('home')->middleware('ceklogin');

// slider
Route::get('/viewslider', 'SliderController@index')->name('viewslider');
Route::get('/addslider', 'SliderController@addslider')->name('addslider');
Route::post('/saveslider', 'SliderController@save')->name('saveslider');
Route::post('/updateslider', 'SliderController@update')->name('updateslider');
Route::get('/deleteslider/{id}', 'SliderController@deletes')->name('deleteslider');
Route::get('/editslider/{id}', 'SliderController@getdata')->name('editslider');

// artikel
Route::get('/viewartikel', 'ArtikelController@index')->name('viewartikel');
Route::get('/addartikel', 'ArtikelController@addartikel')->name('addartikel');
Route::post('/saveartikel', 'ArtikelController@save')->name('saveartikel');
Route::post('/updateartikel', 'ArtikelController@update')->name('updateartikel');
Route::get('/deleteartikel/{id}', 'ArtikelController@deletes')->name('deleteartikel');
Route::get('/editartikel/{id}', 'ArtikelController@getdata')->name('editartikel');