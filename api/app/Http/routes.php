<?php

Event::listen('illuminate.query', function($query)
{
    //var_dump($query);
});


Route::post('user/register', 'UserController@register');
Route::resource('user', 'UserController');

