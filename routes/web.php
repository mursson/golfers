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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/matches', 'MatchController@index');
Route::get('/matches', 'MatchController@index');
Route::post('/matches', 'MatchController@store');

Route::get('/matches/{id}', 'MatchController@edit');
Route::post('/matches/{id}', 'MatchController@update');

Route::get('/matches/{id}/eliminar', 'MatchController@delete');

Route::get('/report', 'HomeController@getReport');
Route::post('/report', 'HomeController@postReport');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'],  function(){

	//Rutas Usuarios
	Route::get('/usuarios', 'UserController@index');
	Route::post('/usuarios', 'UserController@store');

	Route::get('/usuarios/{id}', 'UserController@edit');
	Route::post('/usuarios/{id}', 'UserController@update');

	Route::get('/usuarios/{id}/eliminar', 'UserController@delete');

	//Rutas Courses
	Route::get('/courses', 'CourseController@index');
	Route::post('/courses', 'CourseController@store');

	Route::get('/courses/{CourseID}', 'CourseController@edit');
	Route::post('/courses/{CourseID}', 'CourseController@update');

	Route::get('/courses/{CourseID}/eliminar', 'CourseController@delete');

	//Rutas Holes
	Route::get('/courses/{CourseID}/holes', 'HoleController@index');
	Route::post('/courses/{CourseID}/holes', 'HoleController@store');

	Route::get('/courses/{CourseID}/holes/{HoleID}', 'HoleController@edit');
	Route::post('/courses/{CourseID}/holes/{HoleID}', 'HoleController@update');

	Route::get('/courses/{CourseID}/holes/{HoleID}/eliminar', 'HoleController@delete');

	//Rutas Courses
	Route::get('/competitions', 'CompetitionController@index');
	Route::post('/competitions', 'CompetitionController@store');

	Route::get('/competitions/{CompetitionID}', 'CompetitionController@edit');
	Route::post('/competitions/{CompetitionID}', 'CompetitionController@update');

	Route::get('/competitions/{CompetitionID}/eliminar', 'CompetitionController@delete');
	
	//Route::get('/config', 'ConfigController@index');	
});
