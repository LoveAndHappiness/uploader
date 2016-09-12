<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'StepsController@step1');
Route::resource('orders', 'OrdersController');
Route::resource('files', 'FilesController');

Route::get(	'step1', 		array('as' => 'step1', 			'uses' => 'StepsController@step1'));
Route::get(	'step2', 		array('as' => 'step2', 			'uses' => 'StepsController@step2'));
Route::get(	'step3', 		array('as' => 'step3', 			'uses' => 'StepsController@step3'));
Route::get(	'step4', 		array('as' => 'step4', 			'uses' => 'StepsController@step4'));
Route::get( 'step5', 		array('as' => 'step5',          'uses' => 'StepsController@step5'));
Route::post('step1', 		array('as' => 'step1.store', 	'uses' => 'StepsController@step1store'));
Route::post('step2', 		array('as' => 'step2.store', 	'uses' => 'StepsController@step2store'));
Route::post('step3', 		array('as' => 'step3.store', 	'uses' => 'StepsController@step3store'));
// Route::post('step3', 		array('as' => 'step3.store2', 	'uses' => 'StepsController@step3store2'));
Route::post('step4', 		array('as' => 'step4.store', 	'uses' => 'StepsController@step4store'));
Route::get(	'showSession', 	array('as' => 'showSession', 	'uses' => 'OrdersController@showSession'));
Route::get( 'flushSession', array('as' => 'flushSession',   'uses' => 'OrdersController@flushSession'));
Route::get( 'thank-you', 	array('as' => 'thank-you', 		'uses' => 'OrdersController@thankyou'));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);