<?php

use App\Http\Controllers\FeedbackController;
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

Route::get('/feedbacks', 'FeedbackController@get');
Route::post('/feedback', 'FeedbackController@create');
Route::put('/feedback/{id}', 'FeedbackController@update')->where('id', '[0-9]+');
Route::delete('/feedback/{id}', 'FeedbackController@delete')->where('id', '[0-9]+');
