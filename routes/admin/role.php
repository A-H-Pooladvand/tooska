<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 1/24/2018
 * Time: 12:47 AM
 */

Route::group(['prefix' => 'roles', 'as' => 'role.', 'namespace' => 'User\Admin\Role'], function () {

    Route::get('/', 'RoleController@index')->name('index');
    Route::any('items', 'RoleController@items')->name('items');
    Route::get('create', 'RoleController@create')->name('create');
    Route::post('/', 'RoleController@store')->name('store');
    Route::get('{id}', 'RoleController@show')->name('show');
    Route::get('edit/{id}', 'RoleController@edit')->name('edit');
    Route::put('{id}', 'RoleController@update')->name('update');
    Route::delete('soft/{id}', 'RoleController@softDestroy')->name('soft.destroy');
    Route::delete('{id}', 'RoleController@destroy')->name('destroy');

});