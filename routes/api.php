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


// Retorna los datos Por AJAX
Route::get('integrantes', function () {
    // return \App\Integrantes_ConsejoComunal::all();
    return datatables()
        ->eloquent(\App\Integrantes::query())
        
        ->toJson();
});
