<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    
    Route::group(['prefix'=>'admin'],function(){
        Route::get('news/create','Admin\NewsController@add');
        
        Route ::get('admin/news/create','Admin/AAAController@bbb');
   
        Route ::get('admin/profile/create','Admin/ProfileController@add');
        Route ::get('admin/profile/edit','Admin/ProfileController@edit');
    });  
    
});
