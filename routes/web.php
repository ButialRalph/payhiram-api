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



/*Route::get('/apiv1/user/create','PartnerController@create');
Route::get('/apiv1/user/insert','PartnerController@insert');
Route::get('/apiv1/user/update','PrtnerController@update');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
