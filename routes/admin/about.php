<?php

Route::group(['prefix' => 'about', 'as' => 'about.', 'namespace' => 'About\Admin'], function () {

    Route::get('{id}', 'AboutController@show')->name('show')->middleware('permission:read-about');
    Route::get('edit/{id}', 'AboutController@edit')->name('edit')->middleware('permission:edit-about');
    Route::put('{id}', 'AboutController@update')->name('update')->middleware('permission:edit-about');

});