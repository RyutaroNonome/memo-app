<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'MemosController@index');
    Route::resource('memos', 'MemosController', ['only' => ['index', 'store']]);
    Route::get('/memos/{id}/delete', 'MemosController@destroy');
});