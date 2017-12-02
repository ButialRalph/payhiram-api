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


Route::get('/apiv1/store/create','storeController@create');
Route::get('/apiv1/store/insert','storeController@insert');
Route::get('/apiv1/store/update','storeController@update');


Route::get('/apiv1/point/create','PointController@create');
Route::get('/apiv1/point/insert','PointController@insert');
Route::get('/apiv1/point/update','PointController@update');

Route::get('/apiv1/partner/create','PayHiramUser@create');
Route::get('/apiv1/partner/insert','PayHiramUser@insert');
Route::get('/apiv1/partner/update','PayHiramUser@update');



Route::get('/apiv1/partner/create','WalletController@create');
Route::get('/apiv1/partner/insert','WalletController@insert');
Route::get('/apiv1/partner/update','WalletController@update');


/*Route::get('/apiv1/user/create','PartnerController@create');
Route::get('/apiv1/user/insert','PartnerController@insert');
Route::get('/apiv1/user/update','PrtnerController@update');*/
