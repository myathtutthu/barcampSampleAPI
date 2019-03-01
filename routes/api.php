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

Route::get('/books', 'BookListController@index');
Route::get('/book/{id}', 'BookListController@detail');
Route::post('/addNewBook', 'BookListController@insertNewBook');
Route::get('/bookResource', 'BookListController@bookIndexResource');
