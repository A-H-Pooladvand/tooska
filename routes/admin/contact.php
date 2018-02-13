<?php

Route::group(['prefix' => 'contact', 'as' => 'contact.', 'namespace' => 'Contact\Admin'], function () {

    Route::get('{id}', 'ContactController@show')->name('show')->middleware('permission:read-contact');
    Route::get('edit/{id}', 'ContactController@edit')->name('edit')->middleware('permission:edit-contact');
    Route::put('{id}', 'ContactController@update')->name('update')->middleware('permission:edit-contact');

});