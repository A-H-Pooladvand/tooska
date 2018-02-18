<?php

Route::group(['prefix' => 'why-choose-us', 'as' => 'why_choose_us.', 'namespace' => 'WhyChooseUs\Admin'], function () {

    Route::get('/', 'WhyChooseUsController@index')->name('index')->middleware('permission:read-why-choose-us');
    Route::any('items', 'WhyChooseUsController@items')->name('items')->middleware('permission:read-why-choose-us');
    Route::get('create', 'WhyChooseUsController@create')->name('create')->middleware('permission:create-why-choose-us');
    Route::post('/', 'WhyChooseUsController@store')->name('store')->middleware('permission:create-why-choose-us');
    Route::get('{id}', 'WhyChooseUsController@show')->name('show')->middleware('permission:read-why-choose-us');
    Route::get('edit/{id}', 'WhyChooseUsController@edit')->name('edit')->middleware('permission:edit-why-choose-us');
    Route::put('{id}', 'WhyChooseUsController@update')->name('update')->middleware('permission:edit-why-choose-us');
    Route::delete('{id}', 'WhyChooseUsController@destroy')->name('destroy')->middleware('permission:delete-why-choose-us');

});