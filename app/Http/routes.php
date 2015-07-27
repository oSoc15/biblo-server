<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('admin', 'AdminController@index');

Route::group(['prefix' => 'admin'], function () {
        /*Main route for admin = direct to illustrations page*/
        Route::get('/', 'AdminController@illustrations');
        /*Route to dashboard*/
        Route::get('dashboard', 'AdminController@dashboard');
        /*Route to illustrations page */
        Route::get("illustrations",             ['as' => 'illustrations',           'uses' => 'AdminController@illustrations']);
        /*Routes get/post for creating an illustration*/
        Route::get('illustrations/create',      ['as' => 'illustrations.create',    'uses' => 'AdminController@createIllustration']);
        Route::post('illustrations/create',     ['as' => 'illustrations.create',    'uses' => 'AdminController@storeIllustration']);
        /*Routes for editing illustration*/
        Route::get('illustrations/edit/{id}',   ['as' => 'illustrations.edit',      'uses' => 'AdminController@editIllustration']);
        Route::post('illustrations/edit/{id}',  ['as' => 'illustrations.edit',      'uses' => 'AdminController@updateIllustration']);
        /*Routes for removing picture */
        Route::get('illustrations/remove/{id}', ['as' => 'illustrations.remove',    'uses' => 'AdminController@removeIllustration']);

        Route::get('analytics', "AdminController@analytics");

        Route::get('sample-data', 'AdminController@sampleData');

        Route::get('illustrations/add-tags',                  ['as' => 'illustrations.add-tags', 'uses' => 'AdminController@addTags']);
    }


);

// Auth Routes
// ===================
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(array('prefix' => 'API'), function () {

        Route::get('/', 'APIController@index');

        Route::get('recommendations', 'APIController@recommendations');

        Route::get('getDataFromBIBNet', 'APIController@getDataFromBIBNet');

        Route::get('illustrations', 'APIController@illustrations');

    }
);

