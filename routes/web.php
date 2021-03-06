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
Route::get('/employees', 'HomeController@registeredEmployees')->name('registered.employees');

Route::match(['get', 'post'], '/register', 'Auth\LoginController@showLoginForm');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::resource('/employee', 'EmployeeController');
  Route::get('/employee/register/{id}', 'EmployeeController@register');
});
