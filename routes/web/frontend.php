<?php

Route::group(['as' => 'frontend::', 'namespace' => 'Frontend'], function(){
    Route::get('home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
    Route::get('/login', ['as' => 'user.login', 'uses' => 'LoginController@index']);
    Route::get('/register', ['as' => 'user.register', 'uses' => 'LoginController@register']);

});
