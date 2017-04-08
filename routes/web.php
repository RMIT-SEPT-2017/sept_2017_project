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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('booking', ['as' => 'booking', 'uses' => 'BookingController@update']);
Route::post('update_employee', ['as' => 'update_employee', 'uses' => 'EmployeeController@updateEmployees']);
Route::post('update_employee_times', ['as' => 'update_employee_times', 'uses' => 'EmployeeTimesController@updateEmployeeTimes']);
Route::get('/logout', 'AdminController@logoutUser');
Route::get('/admin', 'AdminController@index');
Route::get('/create_employee', 'AdminController@createEmployee');
Route::get('/add_employee_times', 'AdminController@employeeTimes');
Route::get('/view_bookings', 'AdminController@bookings');

//Route::get('/booking/{date}','BookingController@update');
//Route::resource('/booking', 'BookingController');
