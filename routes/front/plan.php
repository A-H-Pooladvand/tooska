<?php

Route::group(['prefix' => 'plans', 'as' => 'plan.', 'namespace' => 'Plan\Front'], function () {

    Route::get('{id}', 'PlanController@show')->name('show');

});