<?php

Event::listen('illuminate.query', function($query)
{
    //var_dump($query);
});


Route::post('user/register', 'UserController@register');
Route::post('user/login', 'UserController@login');
Route::resource('user', 'UserController');

