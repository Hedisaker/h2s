<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

	Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {


	Route::resource('products', 'ProductsController')->except(['show']);
	Route::resource('services', 'ServicesController')->except(['show']);
	Route::resource('teams', 'TeamsController')->except(['show']);
	Route::resource('homes', 'HomeController');
	Route::resource('homes', 'HomeController');
	Route::get('/', 'HomeController@index')->name('welcome');



	
});
});


