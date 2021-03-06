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
Route::get('home', 'Estate@home')->name('home');

Route::get('seller', 'Sellers@index')->name('seller');

Route::get('estates/index', 'Estate@index')->name('estateIndex');

Route::get('estates/add', 'Estate@create')->name('estateAddPage');

//TODO: change method to delete
Route::get('estates/delete/{id}', 'Estate@destroy')->name('estateDelete');

Route::post('estate-edit/store', 'Estate@store')->name('estateAdd');

Route::put('estate-update/{id}', 'Estate@update')->name('estate.update');

Route::get('estates/index/{id}', 'Estate@search')->name('estateEdit');

Route::get('estates/assign/{item_id}/{employee_id}', 'Estate@assignEstateToEmployee')->name('assignEstateToEmployee');

Route::get('estates/unassign/{item_id}/{employee_id}', 'Estate@unassignEstateToEmployee')->name('unassignEstateToEmployee');





Route::get('categories', 'Categories@index');

Route::get('bill-of-sale', 'BillController@index');

Route::post('bill-of-sale/save', 'BillController@store')->name('saveBill');


Route::get('employee/add', 'Employee@create')->name('employeeCreate');

Route::put('employee/update/{id}', 'Employee@update')->name('employeeUpdate');

Route::post('employee/store', 'Employee@store')->name('employeeStore');

Route::get('employee/index', 'Employee@index')->name('employeeIndex');

Route::get('employee/show/{id}', 'Employee@show')->name('employeeProfile');

Route::get('employee/index/{id}', 'Employee@edit')->name('employeeEdit');

Route::get('employee/delete/{id}', 'Employee@destroy')->name('employeeDelete');



