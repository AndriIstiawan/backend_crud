<?php


Route::get('/test', function () {
    return "test ok";
});

// Route::get('/reporting', function () {
//     return "string";
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::resource('transaksi','TransaksiController');


