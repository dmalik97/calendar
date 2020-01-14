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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/event'], function()
{
 Route::get('/', ['as' => 'site.event', 'uses' => 'EventController@index']);
 Route::get('/index', ['as' => 'site.event.index', 'uses' => 'EventController@index']);
});

Route::group(['prefix'=>'/event'],function(){
    Route::get('event','EventController@index')->name('event');  
    Route::get('event-list','EventController@event_list');  
    Route::post('event','EventController@save_event');  
    Route::get('all-event','EventController@all_event')->name('all-event');
    Route::get('single-event/{id}','EventController@single_event');
    Route::post('update-event','EventController@update_event');
    Route::delete('delete-event/{id}','EventController@delete_event');
  });
