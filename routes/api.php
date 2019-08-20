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

/* ARTICLES */
// All
Route::resource('articles', 'ArticleController');
// Route::get('articles', 'ArticleController@index');

// // Specific
// Route::get('article/{id}', 'ArticleController@show');

// // Create 
// Route::post('article', 'ArticleController@store');

// // Update
// Route::put('article', 'ArticleController@store');

// // Delete
// Route::delete('article/{id}', 'ArticleController@destroy');
/* END OF ARTICLES*/
