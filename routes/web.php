<?php
/*
Route::get('/', function () {
    return view('welcome');
});


 Route::get('/', function start() {
     return view('home');
});
*/ 
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/service','PagesController@services');

Route::resource('posts','Postcontroller');