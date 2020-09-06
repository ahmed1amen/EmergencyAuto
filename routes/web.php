<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'DashboardController@index');


Route::get('/alerter', 'AlerterController@index')->name('alerter.index');


Route::view('/call', 'call')->name('emergencycall');
Route::post('/call', 'VoiceController@initiateCall')->name('initiate_call');


Auth::routes();





Route::resource('specializations', 'SpecializationController');

Route::resource('hospitals', 'HospitalController');

Route::resource('departments', 'DepartmentController');

Route::resource('emergencycodes', 'EmergencycodeController');

Route::resource('doctors', 'DoctorController');

Route::resource('nurses', 'NurseController');

Route::resource('managers', 'ManagerController');

Route::resource('employees', 'EmployeeController');


Route::resource('users', 'UserController');

Route::resource('settings', 'SettingController');
