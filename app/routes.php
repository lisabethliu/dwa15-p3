<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('prefix' => '/',), function() {
    Route::get('', 'PageController@showHome');
    Route::get('lorem-ipsum', 'PageController@showLoremIpsumGenerator');
    Route::get('user-generator', 'PageController@showUsersGenerator');
});

Route::group(array('prefix' => 'api',), function() {
    Route::get('lig', 'ApiController@generateLoremIpsum');
    Route::get('ug', 'ApiController@generateUser');
});
