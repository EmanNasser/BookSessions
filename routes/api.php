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
//Route::get('about/{starting_date?}/{num_days?}/{chapter_sessions?}','homeController@about');
//Route::get('/','homeController@index');
//Route::get("/",'homeController@show');
Route::get("/",'homeController@about');
//api/about/1-1-202/1%204%206/7
//api/about?x=2017-06-08&y=6&z=7