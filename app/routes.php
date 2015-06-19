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

Route::get('/', function()
{
	return View::make('parking.index');
});
 Route::resource("home", "BerandaController");
 Route::resource("parking", "ParkingController");
 Route::resource("admin", "AdminController");
 Route::resource("officer", "OfficerController");
 Route::resource("user", "UserController");
 Route::resource("menuadmin", "MenuadminController");
 Route::resource("menuofficer", "MenuofficerController");
 Route::resource("menuuser", "MenuuserController");
 Route::resource("manageadmin", "ManageadminController");
 Route::resource("manageofficer", "ManageofficerController");
 Route::resource("manageuser", "ManageuserController");
 Route::resource("viewadmin", "ViewadminController");
 Route::resource("viewofficer", "ViewofficerController");
 Route::resource("viewuser", "ViewuserController");
 
Route::post("Manageuser/post", "BerandaController@store");

Route::post("Manageadmin/post", "ManageadminController@store");
Route::get("Manageadmin/{id}/destroy", "ManageadminController@destroy");
Route::get('Manageadmin/edit/{id}', 'ManageadminController@edit');
Route::post('Manageadmin/update/{id}', array('as' => 'Manageadmin.update', 'uses' => 'ManageadminController@update'));

Route::post("Manageofficer/post", "ManageofficerController@store");
Route::get('Manageofficer/edit/{id}', 'ManageofficerController@edit');
Route::post('Manageofficer/update/{id}', array('as' => 'Manageofficer.update', 'uses' => 'ManageofficerController@update'));
Route::get("Manageofficer/{id}/destroy", "ManageofficerController@destroy");

Route::post("Manageuser/post", "ManageuserController@store");
Route::get("Manageuser/{id}/destroy", "ManageuserController@destroy");
Route::get('Manageuser/edit/{id}', 'ManageuserController@edit');
Route::post('Manageuser/update/{id}', array('as' => 'Manageuser.update', 'uses' => 'ManageuserController@update'));

Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');