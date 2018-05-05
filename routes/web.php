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


Route::get('',                   ['as' => 'home',            'uses' => 'IndexController@index']);

Route::get('/about',             ['as' => 'about',           'uses' => 'AboutController@index']);

Route::get('/devis',             ['as' => 'devis',           'uses' => 'DevisController@index']);

Route::post('/devis',            ['as' => 'devis',           'uses' => 'DevisController@store']);

Route::get('/contact',           ['as' => 'contact',         'uses' => 'ContactController@index']);

Route::post('/contact',          ['as' => 'contact',         'uses' => 'ContactController@store']);