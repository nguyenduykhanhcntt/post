<?php

//Route::get('login','LoginController@getLogin');

//Route::post('loginpost','LoginController@postLogin');

//Route::get('index','HomeController@index');

Route::get('index/post',['uses' => 'Post@index', 'as' => 'index.post']);

Route::get('index/show/{id}',['uses' => 'Post@show', 'as' => 'show.post']);

Route::post('index/add',['uses' => 'Post@add', 'as' => 'index.add']);

Route::post('index/edit/post/{id}', ['uses' => 'Post@editPost', 'as' => 'index.edit.post']);

Route::get('index/delete/post/{id}', ['uses' => 'Post@delete', 'as' => 'index.edit.delete']);

Route::get('lk', ['uses' => 'Post@lk', 'as' => 'lk']);

Route::get('index/company', ['uses' => 'Company@index', 'as' => 'index.company']);

Route::get('index/company/show/{id}', ['uses' => 'Company@show', 'as' => 'index.company.show']);

Route::post('index/company/add', ['uses' => 'Company@add', 'as' => 'index.company.add']);

Route::post('index/company/edit/{id}', ['uses' => 'Company@edit', 'as' => 'index.company.edit']);

Route::get('index/company/delete/{id}', ['uses' => 'Company@delete', 'as' => 'index.company.delete']);

//Route::get('oke', 'GetLog@index');
