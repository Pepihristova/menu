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
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::resource('restaurants', 'RestaurantsController');
Route::get('admin/routes/restaurants', 'RestaurantsController@index')->name('restaurants');
Route::get('/choose_menu', 'HomeController@menu')->name('choose_menu');
Route::resource('onedegree', 'OneDegreeMenusController');
Route::resource('onedegree_choice', 'OneDegreeChoicesController');
Route::resource('twodegree', 'TwoDegreeMenusController');
Route::resource('threedegree', 'ThreeDegreeMenusController');
Route::resource('fourdegree', 'FourDegreeMenusController');
Route::resource('twodegree_choice', 'TwoDegreeChoicesController');
Route::resource('threedegree_choice', 'ThreeDegreeChoicesController');
Route::resource('fourdegree_choice', 'FourDegreeChoicesController');
