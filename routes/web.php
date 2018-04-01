<?php

Route::get('/', 'PagesController@home');

Route::get('messages/{message}', 'MessagesController@show');

Route::post('messages/create', 'MessagesController@create')
    ->middleware('auth');
// Auth
Auth::routes();
// Social Auth
Route::get('auth/facebook', 'SocialAuthController@facebook');
Route::post('auth/facebook/callback', 'SocialAuthController@callback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{username}', 'UsersController@show');
Route::get('/{username}/follows', 'UsersController@follows');
Route::get('/{username}/followers', 'UsersController@followers');

Route::post('/{username}/follow', 'UsersController@follow')
    ->middleware('auth');
Route::post('/{username}/unfollow', 'UsersController@unfollow')
    ->middleware('auth');