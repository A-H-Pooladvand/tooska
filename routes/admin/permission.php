<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 1/23/2018
 * Time: 10:40 PM
 */

Route::group(['prefix' => 'permissions', 'as' => 'permission.', 'namespace' => 'User\Admin\Permission'], function () {

    Route::get('/', 'PermissionController@index')->name('index');
    Route::any('items', 'PermissionController@items')->name('items');
    Route::get('create', 'PermissionController@create')->name('create');
    Route::post('/', 'PermissionController@store')->name('store');
    Route::get('{id}', 'PermissionController@show')->name('show');
    Route::get('edit/{id}', 'PermissionController@edit')->name('edit');
    Route::put('{id}', 'PermissionController@update')->name('update');
    Route::delete('soft/{id}', 'PermissionController@softDestroy')->name('soft.destroy');
    Route::delete('{id}', 'PermissionController@destroy')->name('destroy');

});