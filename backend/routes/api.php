<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Auth Routes
 */
Route::post('/login', 'Auth\AuthController@login');
Route::post('/register', 'Auth\AuthController@register');
Route::post('/forgot-password', 'Auth\AuthController@forgotPassword');
Route::post('/reset-password', 'Auth\AuthController@resetPassword');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return "Hello World!";
});
