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
    return view('pages.home');
});
Route::get('/home','PagesController@Home');
Route::get('/create_event','PagesController@create_event');
Route::get('/events','PagesController@Events');
Route::get('/available_forms','PagesController@available_forms');
Route::get('/form_responses','FormsController@index');
// Overriding
Route::resource('events','EventsController');
Route::resource('forms','FormsController');
Auth::routes();



Auth::routes();

