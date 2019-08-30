<?php

//Route::get('login','LoginController@getLogin');

//Route::post('loginpost','LoginController@postLogin');

//Route::get('index','HomeController@index');

Route::group(['prefix'=>'index/post'], function(){

	Route::get('/',['uses' => 'Post@index', 'as' => 'index.post']);

	Route::get('/show/{id}',['uses' => 'Post@show', 'as' => 'index.post.show']);

	Route::post('/add',['uses' => 'Post@add', 'as' => 'index.post.add']);

	Route::post('/edit/{id}', ['uses' => 'Post@editPost', 'as' => 'index.post.edit']);

	Route::get('/delete/{id}', ['uses' => 'Post@delete', 'as' => 'index.post.delete']);
});


Route::group(['prefix'=>'index/company'],function(){

    Route::get('/', ['uses' => 'Company@index', 'as' => 'index.company']);

    Route::get('/{id}', ['uses' => 'Company@show', 'as' => 'index.company.show']);

	Route::post('/add', ['uses' => 'Company@add', 'as' => 'index.company.add']);

	Route::post('/edit/{id}', ['uses' => 'Company@edit', 'as' => 'index.company.edit']);

	Route::get('/delete/{id}', ['uses' => 'Company@delete', 'as' => 'index.company.delete']);
});



// Test Đăng ký provider
use App\Services\CheckPhoneNumber;
Route::get('phone/{phone}', function(CheckPhoneNumber $s ,$a){
	$d =  $s->phoneNumber($a);
	echo $d;
});

Route::get('oke', 'GetLog@index');
