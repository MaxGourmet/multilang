<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@welcome');

    Route::get('/home', [
        'middleware' => 'auth',
        'uses' => 'HomeController@index'
    ]);

    Route::get('/profile', [
        'middleware' => 'auth',
        'uses' => 'UsersController@profile'
    ]);

    Route::post('/saveProfile', [
        'middleware' => 'auth',
        'uses' => 'UsersController@saveProfile'
    ]);

    Route::get('/saveProfile', [
        'middleware' => 'auth',
        'uses' => 'UsersController@profile'
    ]);
});