<?php

// Halaman index
Route::get('/', function () {
    return view('welcome');
});

// route kusus untuk fitur admin 
Route::group(['middleware' => 'admin'], function() {
    // dashboard admin
    Route::get('/admin', 'AdminController@dashboard')->name('admin');
    //route tambah data tukang pijit
    Route::get('/masseus/tambah', 'MasseusController@create');
    Route::post('/masseus/tambah', 'MasseusController@store');
     // route show order customer
    Route::get('/order/show-orders', 'OrderController@showDataOrder');
}); 

Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/user/setting/{id}', 'UserController@setting');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::put('/user/{id}', 'UserController@update');

    //route user ganti password
    Route::get('/user/ganti-password/{id}/edit', 'UserController@edit_password');
    Route::put('/user/ganti-password/{id}', 'UserController@update_password');

    // route tukang pijit
    Route::get('/home', 'MasseusController@index')->name('home');
    //route tampil single data
    Route::get('/masseus/{id}', 'MasseusController@show');

    Route::get('/order/masseus/{id}', 'OrderController@formOrder');
    Route::post('/order/masseus/{id}', 'OrderController@orderJasa');

    //route search tukang pijit
    Route::get('/query', 'MasseusController@search');

    Route::get('/testimoni', function() {
        return view('testimoni-beta');
    });
});

Route::get('/syarat', function() {
    return view('syarat');
});

Auth::routes();
