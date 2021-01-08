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

Route::get('/','IndexController@main');
/*Route::get('/Registrationform','RegistrationForm@registration');
*/
Route::get('/Signin','SigninController@Signin');
Route::post('/Signin','SigninController@loginuser');

Route::post('/submit','SigninController@insert');

Route::get('/user','SigninController@authenticate');
Route::post('/logout','SigninControllerr@switchoff');


