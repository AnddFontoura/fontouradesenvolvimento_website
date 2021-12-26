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
    Route::group(['prefix' => 'news-category', 'middleware' => 'isAdmin'], function() {
        Route::match(['get','post'], '/', 'NewsCategoriesController@index');
        Route::get('form', 'NewsCategoriesController@create');
        Route::get('form/{id}','NewsCategoriesController@create');
        Route::post('save', 'NewsCategoriesController@store');
        Route::post('save/{id}', 'NewsCategoriesController@update');
        Route::get('view/{id}', 'NewsCategoriesController@show');
        Route::get('delete/{id}', 'NewsCategoriesController@destroy');
    });
});
