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
Route::get('booking', 'BookingController@index');
Route::post('update_employee', ['as' => 'update_employee', 'uses' => 'EmployeeController@updateEmployees']);
Route::post('update_service', ['as' => 'update_service', 'uses' => 'ServiceController@updateServices']);
Route::post('add_booking', ['as' => 'add_booking', 'uses' => 'BookingController@addBooking']);
Route::post('update_employee_times', ['as' => 'update_employee_times', 'uses' => 'EmployeeTimesController@updateEmployeeTimes']);
Route::post('update_business', ['as' => 'update_business', 'uses' => 'BusinessController@updateBusinesses']);
Route::post('update_busines_times', ['as' => 'update_business_times', 'uses' => 'BusinessTimesController@updateBusinessTimes']);


Route::get('/logout', 'AdminController@logoutUser');
Route::get('/admin', 'AdminController@index');
Route::get('/create_employee', 'AdminController@createEmployee');
Route::get('/view_employees', 'AdminController@viewEmployee');
Route::get('/add_employee_times', 'AdminController@employeeTimes');
Route::get('/confirm_employee_times', 'AdminController@confirmEmployeeTimes');
Route::get('/view_bookings', 'AdminController@bookings');
Route::get('/create_service', 'AdminController@createService');
Route::get('/confirm_service', 'AdminController@confirmService');
Route::get('/create_service', 'AdminController@viewServices');
Route::get('/create_business', 'AdminController@viewBusinesses');
Route::get('/confirm_business', 'AdminController@confirmBusiness');
Route::get('/create_business_times', 'AdminController@viewBusinessTimes');
Route::get('/confirm_business_times', 'AdminController@confirmBusinessTimes');

Route::get('/business', 'BusinessController@index');

Route::get('/site_control', 'SuperUserController@index');
Route::post('/update_control', ['as' => 'update_control', 'uses' => 'SuperUserController@updateControl']);


//Route::get('/booking/{date}','BookingController@update');
//Route::resource('/booking', 'BookingController');
