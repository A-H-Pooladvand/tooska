<?php

Route::group(['prefix' => 'contact', 'as' => 'contact.', 'namespace' => 'Contact\Admin'], function () {

    Route::get('{id}', 'BlogController@show')->name('show')->middleware('permission:read-contact');
    Route::get('edit/{id}', 'BlogController@edit')->name('edit')->middleware('permission:edit-contact');
    Route::put('{id}', 'BlogController@update')->name('update')->middleware('permission:edit-contact');

});