<?php

Route::get('/', 'PagesController@home');

Route::get('messages/{message}', 'MessagesController@show');