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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
$api = app(\Dingo\Api\Routing\Router::class);
$api->version('v1', function ($api) {
    $api->get('/test/{id}', \App\Http\Controllers\Frontend\TestController::class.'@test');
});
$api->version('v1', function ($api) {
    $api->resource('articles', \App\Http\Controllers\Api\Frontend\ArticleController::class);
});
