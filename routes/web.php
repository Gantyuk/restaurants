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
    return view('restaurants');
});

Route::get('/restaurants/{id}', function () {
    return view('restaurants.restaurant');
});

Route::get('authentication',function () {
    return view('authentication');
})->name('authentication');

Route::post('authentication','UserController@authentication')->name('authentication');

Route::get('registration',function () {
    return view('registration');
})->name('registration');

Route::post('registration','UserController@registration')->name('registration');

Route::get('log_out','UserController@log_out')->name('logout');

Route::get('user/{id}','UserController@profile')->name('profile');
Route::post('update','UserController@update_profile')->name('update_profile');