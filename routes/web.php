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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'Main\MainController@index');
Route::get('/employers_registration', 'Main\MainController@employers_registration');
Route::get('/workers_registration', 'Main\MainController@workers_registration');
Route::get('/east_employers', 'Main\MainController@east_employers');
Route::get('/vacancies', 'Main\MainController@vacancies');
Route::get('/about', 'Main\MainController@about');
Route::get('/contacts', 'Main\MainController@contacts');


Route::post('main/employers_registration', 'Main\AuthRequestController@employers_registration');
Route::post('main/east_employers_registration', 'Main\AuthRequestController@east_employers_registration');
