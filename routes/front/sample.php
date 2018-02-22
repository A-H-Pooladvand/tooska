<?php

Route::group(['prefix' => 'samples', 'as' => 'sample.', 'namespace' => 'Sample\Front'], function () {

    Route::get('/', 'SampleController@index')->name('index');
    Route::get('{id}', 'SampleController@show')->name('show');

});