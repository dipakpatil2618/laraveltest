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

 Route::get('/', function () {
		return redirect()->route('dairy');
 })->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//dairy route group
Route::group(['prefix' => 'dairy', 'middleware' => 'auth'], function () {
            //list route
            Route::get('/', 'DairyController@index')->name('dairy');
            Route::get('/{id}/show', 'DairyController@show');
			//add route           
            Route::get('/create', 'DairyController@create');
            Route::post('/create', 'DairyController@store');
            //edit route 
            Route::get('/{id}/edit', 'DairyController@edit');
            Route::put('/{id}/update', 'DairyController@update');
            //delete route
            Route::delete('/{id}/delete', 'DairyController@destroy');
            
            
});
