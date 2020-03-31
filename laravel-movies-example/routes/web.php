<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MoviesController@index')->name('movies.index');
Route::get('/movies/{movie}','MoviesController@show')->name('movies.show');

//Route::view('/', 'layouts/index');
//Route::view('/movie', 'layouts/show');
