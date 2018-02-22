<?php

Route::group(['prefix' => 'categories', 'as' => 'category.', 'namespace' => 'Category\Front'], function () {

    Route::get('{module}/{slug}', 'CategoryController@index')->name('index');

});