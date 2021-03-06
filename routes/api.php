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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/xmlrpc', 'Api\MetaWeblogApiController@errorMessage');
Route::post('/xmlrpc', 'Api\MetaWeblogApiController@index');

Route::get( '/categorys', 'Api\CategoryController@index' );
Route::get( '/category/{id}/blogs', 'Api\CategoryController@listBlogs' );
