<?php

Route::group(['prefix' => 'blogs', 'as' => 'blog.', 'namespace' => 'Blog\Front'], function () {

    Route::get('/', 'BlogController@index')->name('index');
    Route::get('{id}', 'BlogController@show')->name('show');

});