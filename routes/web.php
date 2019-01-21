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

Route::resource('kb', 'KbController');

//Route::post('kb/{kb}','KbController@show')->name('kb.show');

Route::Post('kb/{kb}/', 'KbController@add_ques')->name('kb.add_ques');
Route::get('kb/question/{id}', 'KbController@view_ques')->name('kb.view_ques');

