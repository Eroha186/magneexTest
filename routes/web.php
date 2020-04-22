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

Route::get('/', "MainPageController@index")->name('main');

Route::get('contact', "ContactPageController@index")->name('contact');

Route::post('feedback', ['as' => 'feedback', 'uses' => 'FeedbackController@store']);

Route::post('ajaxLoadContRealty', 'AjaxLoadController@ajaxLoadContRealty');

Route::post('filter-realty', ['as' => 'filter-realty', 'uses' => 'FilterController@showResult']);

