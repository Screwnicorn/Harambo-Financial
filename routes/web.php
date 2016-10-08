<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/users', 'UserController@getem');
Route::get('users/{slug}', "UserController@view");

Route::get('/groups', 'GroupController@allGroups');

Route::post('groups/add', 'GroupController@add');
Route::get('groups/add', 'GroupController@create');

Route::get('groups/join', 'GroupController@join');
Route::get('groups/{id}', 'GroupController@view');
