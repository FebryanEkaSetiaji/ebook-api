<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('books', 'BookController@index');
Route::post('books', 'BookController@store');
Route::get('books/{id}', 'BookController@show');
Route::put('books/edit/{id}', 'BookController@update');
Route::delete('books/delete/{id}', 'BookController@destroy');

// Author

Route::get('authors', 'AuthorController@index');
Route::post('authors', 'AuthorController@store');
Route::get('authors/{id}', 'AuthorController@show');
Route::put('authors/edit/{id}', 'AuthorController@update');
Route::delete('authors/delete/{id}', 'AuthorController@destroy');
