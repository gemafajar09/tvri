<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('index');
});
// frontend Home
Route::get('index', 'FrontendController@index')->name('index');

// authentication backend
Route::get('/logins', 'LoginController@index')->name('logins');
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

// kategori
Route::get('/viewkategori', 'KategoriController@index')->name('viewkategori');
Route::get('/addkategori', 'KategoriController@addkategori')->name('addkategori');
Route::post('/savekategori', 'KategoriController@save')->name('savekategori');
Route::post('/updatekategori', 'KategoriController@update')->name('updatekategori');
Route::get('/deletekategori/{id}', 'KategoriController@deletes')->name('deletekategori');
Route::get('/editkategori/{id}', 'KategoriController@getdata')->name('editkategori');