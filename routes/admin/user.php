<?php

Route::group(['prefix' => 'users', 'as' => 'user.', 'namespace' => 'User\Admin'], function () {

    Route::get('/', 'UserController@index')->name('index');
    Route::post('items', 'UserController@items')->name('items');
    Route::get('create', 'UserController@create')->name('create');
    Route::post('/', 'UserController@store')->name('store');
    Route::get('{id}', 'UserController@show')->name('show');
    Route::get('edit/{id}', 'UserController@edit')->name('edit');
    Route::put('{id}', 'UserController@update')->name('update');
    Route::delete('{id}', 'UserController@destroy')->name('destroy');

});