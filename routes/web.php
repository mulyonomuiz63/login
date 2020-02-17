<?php

Route::get('/','AuthController@login');
Route::get('/login','AuthController@login')->name('login');
Route::post('postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');




//Akses Master
Route::group(['middleware'=>['auth','checkRole:1,2']],function(){
Route::get('/dashboard','AuthController@index');
});

Route::group(['middleware'=>['auth','checkRole:2']],function(){
Route::get('/detail','AuthController@detail');
});
