<?php

Route::group(['prefix' => 'services', 'as' => 'service.', 'namespace' => 'Service\Admin'], function () {

    Route::get('/', 'ServiceController@index')->name('index')->middleware('permission:read-service');
    Route::any('items', 'ServiceController@items')->name('items')->middleware('permission:read-service');
    Route::get('create', 'ServiceController@create')->name('create')->middleware('permission:create-service');
    Route::post('/', 'ServiceController@store')->name('store')->middleware('permission:create-service');
    Route::get('{id}', 'ServiceController@show')->name('show')->middleware('permission:read-service');
    Route::get('edit/{id}', 'ServiceController@edit')->name('edit')->middleware('permission:edit-service');
    Route::put('{id}', 'ServiceController@update')->name('update')->middleware('permission:edit-service');
    Route::delete('{id}', 'ServiceController@destroy')->name('destroy')->middleware('permission:delete-service');

});