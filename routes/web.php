<?php

//Route::get('login','LoginController@getLogin');

//Route::post('loginpost','LoginController@postLogin');

//Route::get('index','HomeController@index');

Route::get('index/post',['uses' => 'Post@index', 'as' => 'index.post']);

Route::get('index/show/{id}',['uses' => 'Post@show', 'as' => 'show.post']);

Route::post('index/add',['uses' => 'Post@add', 'as' => 'index.add']);

Route::post('index/edit/post/{id}', ['uses' => 'Post@editPost', 'as' => 'index.edit.post']);


//Route::get('oke', 'GetLog@index');




