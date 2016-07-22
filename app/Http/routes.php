<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Author: Valentine Mwangi
| © Cimplicity Apps. All Rights Reserved.
| 2016
|
*/


Route::get('/',                           ['uses' => 'Home\HomeController@getHome','as' => 'home', 'middleware'=> array('guest')]);
Route::post('/',                   		  ['uses' => 'Auth\AuthController@postLogin', 'middleware'=> array('guest')]);
Route::get('/signout',                     ['uses' => 'Auth\AuthController@getLogout','as' => 'log-out']);
Route::get('/home-redirect',              ['uses' => 'Auth\AuthController@homeCheck','as' => 'home-redirect']);
Route::group(array('before' => 'auth', 'after' => 'no-cache'), function()
{


Route::get('/catechist',                  ['uses' => 'Catechist\CatechistController@getHome','as' => 'catechist']);
Route::post('/search',                    ['uses' => 'Catechist\CatechistController@searchCandidate','as' => 'search']);

Route::get('/baptism',                    ['uses' => 'Catechist\BaptismController@getBaptism','as' => 'baptism']);
Route::post('/search-baptism',                    ['uses' => 'Catechist\CatechistController@searchCandidate','as' => 'search-baptism']);

Route::get('/catechumens',                ['uses' => 'Catechist\CatechumensController@getCatechuments','as' => 'catechumens']);

/*Route::get('/reception-patients-results', ['uses' => 'Catechist\CatechistController@getPatientsResults','as' => 'reception-patients-results']);
Route::get('/reception-registration',     ['uses' => 'Catechist\CatechistController@getRegistration','as' => 'reception-registration');
//Route::post('/reception-registration',    ['uses' => 'Catechist\CatechistController@registerPatient',                'as' => 'register-patient']);
Route::post('/search',                    ['uses' => 'Catechist\CatechistController@searchPatient',                       'as' => 'search']);
*/
/*Route::get('/reception-doctors',         ['uses' => 'Reception\ReceptionController@getDoctors','as' => 'reception-doctors', 'middleware'=> 'auth:receptionist']);
Route::get('/reception-appointments',     ['uses' => 'Reception\AppointmentsController@getAppointments','as' => 'reception-appointments', 'middleware'=> 'auth:receptionist']);
Route::post('/create-appointment',        ['uses' => 'Reception\AppointmentsController@createAppointment',                'as' => 'create-appointment']);
Route::post('/search-appointment',        ['uses' => 'Reception\ReceptionController@searchAppointment',                       'as' => 'search-appointment']);
Route::delete('/reception-appointments/{id}','Reception\AppointmentsController@cancelAppointment');*/



});


