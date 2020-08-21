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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/codes' ,'EmergencyCodeController@index')->name('codes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::resource('users', 'usersController');

Route::resource('doctors', 'DoctorController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('hospitals', 'HospitalController');

Route::resource('departments', 'DepartmentController');