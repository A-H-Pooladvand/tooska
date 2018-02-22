<?php

Route::group(['prefix' => 'tags', 'as' => 'tag.', 'namespace' => 'Tag\Front'], function () {

    Route::get('{module}/{slug}', 'TagController@index')->name('index');

});