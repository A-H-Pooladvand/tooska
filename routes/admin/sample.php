<?php

Route::group(['prefix' => 'samples', 'as' => 'sample.', 'namespace' => 'Sample\Admin'], function () {

    Route::get('/', 'SampleController@index')->name('index')->middleware('permission:read-sample');
    Route::any('items', 'SampleController@items')->name('items')->middleware('permission:read-sample');
    Route::get('create', 'SampleController@create')->name('create')->middleware('permission:create-sample');
    Route::post('/', 'SampleController@store')->name('store')->middleware('permission:create-sample');
    Route::get('{id}', 'SampleController@show')->name('show')->middleware('permission:read-sample');
    Route::get('edit/{id}', 'SampleController@edit')->name('edit')->middleware('permission:edit-sample');
    Route::put('{id}', 'SampleController@update')->name('update')->middleware('permission:edit-sample');
    Route::delete('{id}', 'SampleController@destroy')->name('destroy')->middleware('permission:delete-sample');

});