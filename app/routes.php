<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Bind route parameters
Route::model('offer', 'Offer');

// Show Pages
Route::get('/','OfferController@index');
Route::get('/create','OfferController@create');
Route::get('/edit/{offer}','OfferController@edit');
Route::get('/delete/{offer}','OfferController@delete');
Route::get('/detail/{offer}','OfferController@detail');

// Post Routes
Route::post('/create','OfferController@handleCreate');
Route::post('/edit','OfferController@handleEdit');
Route::post('/delete','OfferController@handleDelete');



Route::get('phpinfo', function()
{
	return View::make('phpinfo');
});