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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',['uses'=>'UserController@home_index']);
Route::get('home',['uses'=>'UserController@home_index']);

Route::get('login',['uses'=>'UserController@Login']);
Route::get('logout',['uses'=>'AdminController@logout']);

Route::get('admin_home',['uses'=>'AdminController@AdminHome']);

Route::get('registers_home',['as'=>'regHome','uses'=>'UserController@registerUserHome']);
Route::get('logout_reg_user',['uses'=>'UserController@logoutRegUser']);

Route::get('appliers_home',['as'=>'applyHome','uses'=>'UserController@registerUserHome']);
Route::get('logout_apply_user',['uses'=>'UserController@logoutApplyUser']);

Route::get('job',['uses'=>'AdminController@Job']);
Route::post('job_seekers_find',['uses'=>'AdminController@job_seekers_find']);
Route::post('job_seekers_find_applied',['uses'=>'AdminController@job_seekers_find_applied']);

Route::get('settings',['uses'=>'AdminController@Settings']);

Route::post('signin',['uses'=>'AdminController@signin']);

Route::post('appliedForm',['uses'=>'UserController@applyForm']);
Route::post('regForm',['uses'=>'UserController@regForm']);

Route::post('regDetailChange',['uses'=>'UserController@regDetailChange']);
Route::post('regFormUpdate',['uses'=>'UserController@regFormUpdate']);
Route::post('regFormUpdateTime',['uses'=>'UserController@regFormUpdateTime']);
Route::post('regFormUpdateUsername',['uses'=>'UserController@regFormUpdateUsername']);
Route::post('regFormUpdatePassword',['uses'=>'UserController@regFormUpdatePassword']);

Route::post('applyDetailChange',['uses'=>'UserController@applyDetailChange']);
Route::post('applyFormUpdate',['uses'=>'UserController@applyFormUpdate']);
Route::post('applyFormUpdateTime',['uses'=>'UserController@applyFormUpdateTime']);

Route::post('EditUserSettings',['uses'=>'AdminController@EditUserSettings']);
Route::post('updatepassword',['uses'=>'AdminController@updatePassword']);
