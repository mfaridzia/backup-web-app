<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', 'AdminController@dashboard')->name('admin');
}); 

Route::get('/user/setting/{id}', 'UserController@setting');

// route tukang pijit
Route::get('/home', 'MasseusController@index')->name('home');
Route::get('/masseus/{id}', 'MasseusController@show');

Route::get('/order/masseus/{id}', 'OrderController@formOrder');

//route search tukang pijit
Route::get('/query', 'MasseusController@search');

Auth::routes();
