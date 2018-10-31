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
    return view('index');
    //return view('autocomplete');

});

//Create user account in Joboard
Route::get('auth/register', 'auth\RegisterController@create');

Route::post('auth/register', 'auth\RegisterController@store');

//user loggin into Joboard
Route::get('auth/login', 'auth\LoginController@create');

Route::post('auth/login', 'auth\LoginController@store');

Route::get('auth/logout', 'auth\LoginController@destroy');


Route::get('/profile/index','ProfileController@index');
Route::get('profile/profileupdate','ProfileController@create');
Route::put('/profile','ProfileController@update');

Route::get('/profile/{techid}/create', 'ProfileWebtecheController@create');
// Route::get('/profile/index','ProfileWebtecheController@alltechno');



//     return view('welcome');
// });

// Auth::routes();
//
// Route::get('/feed', 'HomeController@index')->name('home');

//route for feed page through api controller to grab user data//
Route::get('feed', 'apiController@getdata');
                //route for saving favorite jobs ito favorites//
Route::get('addJobs', 'apiController@getdata');
Route::get('addJobs', 'FavoritesController@store');
Route::delete('deleteJob', 'FavoritesController@destroy');
// >>>>>>> de4259d580113d567a9c07cd108a7c589c29a0ef
