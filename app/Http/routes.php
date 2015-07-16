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
    return view('welcome');
});

Route::get("admin", "AdminController@index");

Route::group(
    ['prefix' => 'admin'],
    function() {

        Route::get("dashboard", "AdminController@dashboard");

        Route::get("illustrations", "AdminController@illustrations");

        Route::get("analytics", "AdminController@analytics");
    }
);

// Auth Routes
// ===================
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(array('prefix' => 'API'), function(){
  Route::get('/', 'APIController@index');

  Route::get('recommendations', 'APIController@recommendations');

  Route::get('getDataFromBIBNet', 'APIController@getDataFromBIBNet');
});

