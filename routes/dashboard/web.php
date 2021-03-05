<?php


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

            Route::get('/', 'HomeController@index')->name('welcome');

            Route::resource('header', 'HeaderController')->except(['show']);

            Route::resource('service', 'ServiceController')->except(['show']);

            Route::resource('ourwork', 'OurworkController')->except(['show']);

            Route::resource('about', 'AboutController')->except(['show']);

            Route::resource('message', 'MessageController')->except(['show']);

            

            Route::resource('footer', 'FooterController')->except(['show']);

            Route::resource('contact', 'ContactController')->except(['show']);

            Route::resource('users', 'UserController')->except(['show']);

        });//end of dashboard routes
    });


