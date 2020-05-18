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


Route::get('/home', 'PagesController@home')->name('home');

Route::get('/registration-dashboard', 'RegistrationController@showRegistration')->name('registration');
Route::get('/registration', 'RegistrationController@showCreate')->name('registration_show_create');
Route::post('/registration/post', 'RegistrationController@create')->name('registration_create');

Route::get('/registration-update/{id}', 'RegistrationController@showUpdate')->name('registration_show_update');
Route::put('/registration-update/post/{id}', 'RegistrationController@update')->name('registration_update');
Route::delete('/registration/{id}', 'RegistrationController@delete')->name('registration_delete');