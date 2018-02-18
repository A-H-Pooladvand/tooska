<?php

Route::group(['prefix' => 'plans', 'as' => 'plan.', 'namespace' => 'Plan\Admin'], function () {

    Route::get('/', 'PlanController@index')->name('index')->middleware('permission:read-plan');
    Route::any('items', 'PlanController@items')->name('items')->middleware('permission:read-plan');
    Route::get('create', 'PlanController@create')->name('create')->middleware('permission:create-plan');
    Route::post('/', 'PlanController@store')->name('store')->middleware('permission:create-plan');
    Route::get('{id}', 'PlanController@show')->name('show')->middleware('permission:read-plan');
    Route::get('edit/{id}', 'PlanController@edit')->name('edit')->middleware('permission:edit-plan');
    Route::put('{id}', 'PlanController@update')->name('update')->middleware('permission:edit-plan');
    Route::delete('{id}', 'PlanController@destroy')->name('destroy')->middleware('permission:delete-plan');

});