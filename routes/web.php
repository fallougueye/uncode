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

Route::get('/', function () {
    return view('admin/uncod/.signin');
});

Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/connexion', 'UserController@login');  
Route::post('/connexion', 'UserController@login');

Route::group(['middleware' => 'Connecter'], function(){
    Route::get('/admin/dashboard', 'UserController@dashboard');
    Route::get('/admin/dashboard/client', 'UserController@dashboard_client');

    Route::get('/inscription', 'UserController@inscription');  
    Route::post('/inscription', 'UserController@inscriptionc')->name('client.inscri');

    });