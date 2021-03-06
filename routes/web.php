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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/privacyepolicy', 'StaticPageController@privacyPolicy')->name('privacy_e_policy');
Route::get('/lavoraconnoi', 'StaticPageController@lavoraConNoi')->name('lavora_con_noi');

//Studenti

Route::get('/studenti', 'StudentController@index')->name('students.index');
Route::get('/studenti/{slug}', 'StudentController@show')->name('students.show');
