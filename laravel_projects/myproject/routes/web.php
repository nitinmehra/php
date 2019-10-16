<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', 'ContactController');
// If you want to create a controller that will only expose a RESTful API, you can use the apiResource method to exclude the routes that are used to serve the HTML templates
// Route::apiResource('contacts', 'ContactController');