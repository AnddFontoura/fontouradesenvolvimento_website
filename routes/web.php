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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function() {
        Route::group(['prefix' => 'news-category'], function() {
            Route::match(['get','post'], '/', 'NewsCategoriesController@index');
            Route::get('form', 'NewsCategoriesController@create');
            Route::get('form/{id}','NewsCategoriesController@create');
            Route::post('save', 'NewsCategoriesController@store');
            Route::post('save/{id}', 'NewsCategoriesController@update');
            Route::get('view/{id}', 'NewsCategoriesController@show');
            Route::post('delete', 'NewsCategoriesController@destroy');
        });

        Route::group(['prefix' => 'news'], function() {
            Route::match(['get','post'], '/', 'NewsController@index');
            Route::get('form', 'NewsController@create');
            Route::get('form/{id}','NewsController@create');
            Route::post('save', 'NewsController@store');
            Route::post('save/{id}', 'NewsController@update');
            Route::get('view/{id}', 'NewsController@show');
            Route::post('delete', 'NewsController@destroy');
        });
    });
});
