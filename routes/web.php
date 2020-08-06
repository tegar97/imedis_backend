<?php

use Illuminate\Support\Facades\Route;

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


Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('dasboard');
    });
    
    Route::get('/home','LandingPageController@index');
    Route::patch('/home/{id}','LandingPageController@update')->name('home.update');

    Route::get('/about','aboutController@index');
    Route::patch('/about/{id}' ,'aboutController@update')->name('about.update');



    Route::get('/settings','settingsController@index');
    Route::resource('/costumers','costumersController');
    Route::resource('/product','productController');
    Route::resource('/services','servicesController');
});
