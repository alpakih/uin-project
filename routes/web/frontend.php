<?php

Route::group(['as' => 'frontend::', 'namespace' => 'Frontend'], function(){
    Route::get('home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
    Route::get('about', ['as' => 'home.about', 'uses' => 'HomeController@about']);
    Route::get('contact', ['as' => 'home.contact', 'uses' => 'HomeController@contact']);
    Route::get('announcement', ['as' => 'home.index', 'uses' => 'HomeController@announcement']);
    Route::get('/student/home', ['as' => 'student.home', 'uses' => 'StudentController@index']);
    Route::get('/student/login', ['as' => 'student.login', 'uses' => 'StudentController@login']);
    Route::post('/student/login', ['as' => 'student.login', 'uses' => 'StudentController@loginPost']);
    Route::get('/student/register', ['as' => 'student.register', 'uses' => 'StudentController@register']);
    Route::post('/student/register', ['as' => 'student.register', 'uses' => 'StudentController@registerPost']);
    Route::get('/student/logout', ['as' => 'student.logout', 'uses' => 'StudentController@logout']);
    Route::get('/student/profile', ['as' => 'student.profile', 'uses' => 'StudentController@profile']);

});
