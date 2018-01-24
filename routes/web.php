<?php



function pathHandler($path)
{
    foreach (File::allFiles(__DIR__ . '\\' . $path) as $partial) {
        require $partial->getPathname();
    }
}

/**
 * Auth Routes
 */

Auth::routes();

/**
 * Admin Routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role:superAdmin|admin|client'], function () {
    pathHandler('admin');
});

/**
 * Panel Routes
 */
Route::group(['prefix' => 'panel', 'as' => 'panel.', 'middleware' => 'auth'], function () {
    pathHandler('panel');
});

/**
 * Front Routes
 */
pathHandler('front');
