<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('index');
});
// frontend Home
Route::get('/index', 'FrontendController@index')->name('index');
Route::get('/tampildetail/{id}', 'NewsController@tampildetail')->name('detailberita');
Route::get('/showartikel', 'NewsController@showall')->name('showartikel');
Route::get('/live', 'LinkController@live')->name('live');
Route::get('/schedulelist', 'JadwalController@showjadwal')->name('schedulelist');
Route::post('/schedulesearch', 'JadwalController@searchjadwal')->name('schedulesearch');
Route::get('/showprogram/{id}', 'ArtikelController@showdetail')->name('showprogram');
Route::get('/programdetail/{id}', 'ArtikelController@tampildetail')->name('programdetail');
Route::get('/statistik', 'FrontendController@statistik')->name('statistik');
Route::get('/tentang_kami/{id}', 'TentangController@tentangkami')->name('tentang_kami');
Route::get('/gallery-home', 'GaleryController@gallery')->name('gallerys');
Route::get('/rate/produksi', 'RateController@program')->name('rate_produksi');
Route::get('/rate/penyiaran', 'RateController@iklan')->name('rate_penyiaran');

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

// linkonline
Route::get('/link', 'LinkController@index')->name('link');
Route::post('/uplink', 'LinkController@update')->name('uplink');

// news
Route::get('/viewnews', 'NewsController@index')->name('viewnews');
Route::get('/addnews', 'NewsController@addnews')->name('addnews');
Route::post('/savenews', 'NewsController@save')->name('savenews');
Route::post('/updatenews', 'NewsController@update')->name('updatenews');
Route::get('/deletenews/{id}', 'NewsController@deletes')->name('deletenews');
Route::get('/editnews/{id}', 'NewsController@getdata')->name('editnews');

// schedule
Route::get('/schedule', 'JadwalController@index')->name('schedule');
Route::get('/addschedule', 'JadwalController@addschedule')->name('addschedule');
Route::post('/saveschedule', 'JadwalController@save')->name('saveschedule');
Route::get('/detailbulan/{bulan}','JadwalController@detailbulan')->name('detailbulan');
Route::get('/detailhari/{hari}','JadwalController@detailhari')->name('detailhari');
Route::post('/editschedule', 'JadwalController@edit')->name('editschedule');

// tentang kami
Route::get('/tentangkami', 'TentangController@index')->name('tentangkami');
Route::get('/addinfo', 'TentangController@add')->name('addinfo');
Route::get('/editinfo/{id}', 'TentangController@edit')->name('editinfo');
Route::post('/savetentang', 'TentangController@save')->name('savetentang');
Route::post('/saveinfo', 'TentangController@saveedit')->name('saveinfo');
Route::get('/deleteinfo/{id}', 'TentangController@delete')->name('deleteinfo');

// gallery
Route::get('/gallerys', 'GaleryController@index')->name('gallery');
Route::post('/savegallery', 'GaleryController@save')->name('savegallery');
Route::get('/deletegallery/{id}', 'GaleryController@deletes')->name('deletegallery');

// tautan
Route::get('/linklainya', 'TautanController@index')->name('linklainya');
Route::post('/linklainyasave', 'TautanController@save')->name('linklainyasave');
Route::get('/linklainyadelete/{id}', 'TautanController@deletes')->name('linklainyadelete');

// rate card
Route::get('/ratecardindex','RateController@index')->name('ratecardindex');
Route::post('/retecardsave', 'RateController@save')->name('retecardsave');
Route::get('/retecarddelete/{id}', 'RateController@deletes')->name('retecarddelete');

// mediasosial
Route::get('/mediasosial','SosialController@index')->name('media-sosial');