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
Route::post('login', 'Auth\AuthController@login');
Route::post('register', 'Auth\AuthController@register');
Route::post('forgot-password', 'Auth\AuthController@forgotPassword');
Route::post('reset-password', 'Auth\AuthController@resetPassword');

// Route::group(['middleware' => 'auth:api'],
// function() {

    /** Auth */
    Route::get('logout', 'Auth\AuthController@logout');

    /**
     * Myself
     */
    Route::get('me', 'Post\PostControllor@createPost');
    Route::get('me/timeline', 'Post\PostControllor@createPost');

    /** User */
    Route::get('user', 'User\UserController@user');
    Route::get('user/:id', 'User\UserController@getUserID');
    Route::post('user/:id/follow', 'User\UserController@follow');
    Route::get('user/:id/timeline', 'User\UserController@getUserTimeline');

    /**
     * Post
     */
    Route::post('post', 'Post\PostController@createPost');

// });

// Route::middleware('auth:api')->get('user', function (Request $request) {
//     return "Hello World!";
// });
