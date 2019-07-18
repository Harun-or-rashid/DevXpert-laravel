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
    return view('partial.contactform');
});

Route::post('/addcustom','CustomerController@store');
Route::get('/addcustomer','CustomerController@create');
Route::get('/showdetails','CustomerController@index');


Route::get('/contact','ContactFormController@create');
Route::post('/contactfrm','ContactFormController@store');



