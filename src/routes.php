<?php

Route::group(['namespace' => 'NukaCode\Admin\Controllers', 'middleware' => ['is'], 'roles' => ['ADMIN', 'DEVELOPER']], function () {
    Route::get('/admin', [
        'as'   => 'admin.index',
        'uses' => 'AdminController@dashboard'
    ]);
});