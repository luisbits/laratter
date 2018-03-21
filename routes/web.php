<?php

Route::get('/', 'PagesController@home');

Route::get('messages/{message}', 'MessagesController@show');

Route::post('messages/create', 'MessagesController@create')
    ->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{username}', 'UsersController@show');
Route::post('/{username}/follow', 'UsersController@follow')
    ->middleware('auth');
Route::get('/{username}/follows', 'UsersController@follows');