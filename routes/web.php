<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/integrantes', 'IntegrantesController@show')->name('integrantes');



Route::get('/consejocomunal/create', 'ConsejoComunalController@create')->name('crearConsejoComunal');
Route::post('/consejocomunal', 'ConsejoComunalController@store');

Route::get('/consejoscomunales/{consejocomunal}', 'GuestController@show');
Route::get('/consejoscomunales/{consejocomunal}/edit', 'ConsejoComunalController@edit');

Route::put('/consejocomunal/{consejocomunal}', 'ConsejoComunalController@update');
