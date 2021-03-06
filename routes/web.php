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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {


        Route::get('/', 'homePageController@index');

        Route::get('Message','MessageController@store');


    });

    
Route::get('/Dashboard', function () {
    return redirect()->route('dashboard.welcome');
});




Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

