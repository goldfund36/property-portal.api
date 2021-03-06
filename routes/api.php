<?php
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user', 'AuthController@user');
    Route::post('register', 'Auth\RegisterController@register');

});

Route::group([
    'middleware' => 'api'
], function($router) {
    Route::get('region/{query}', 'RegionController@getRegionByQuery');
    Route::get('types', 'TypeController@getTypes');
});
