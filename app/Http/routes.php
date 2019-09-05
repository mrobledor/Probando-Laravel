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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/carolina/{nombre?}/{edad?}',function($nombre = "Matias Robledo", $edad = null){
	return view('contacto')
				->with('nombre', $nombre)
				->with('edad', $edad)
				->with('frutas',array('naranja','pera','manzana','frambuesa'));
})->where([
	'nombre' =>'[A-Za-z]+',
	'edad' =>'[0-9]+'
]);
Route::get('/amor', function(){
	return view('contacto.prueba');
});
Route::group(['prefix' => 'fruteria'],function(){
Route::get('/frutas','FrutasController@getIndex');
Route::get('/naranjas/{admin?}',['middleware' =>'EsAdmin',
												'uses' => 'FrutasController@getNaranjas']);
Route::get('/peras','FrutasController@anyPeras');
});
Route::POST('/recibir','FrutasController@recibirFormulario');
