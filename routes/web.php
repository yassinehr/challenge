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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('challenges', 'ChallengesController@index')->name('challenges.index');
Route::get('challenges/create', 'ChallengesController@create')->name('challenges.create');
Route::post('challenges', 'ChallengesController@store')->name('challenges.store');

Route::get('challenges/{challenge}', 'ChallengesController@show')->name('challenges.show');
Route::get('challenges/{challenge}/edit', 'ChallengesController@edit')->name('challenges.edit');
Route::patch('challenges/{challenge}', 'ChallengesController@update')->name('challenges.update');
Route::delete('challenges/{challenge}', 'ChallengesController@destroy')->name('challenges.destroy');

Route::any('challenges/filter', 'ChallengesController@filter')->name('challenges.filter');


Route::get('submits/create', 'SubmitsController@create')->name('submits.create');
Route::post('submits', 'SubmitsController@store')->name('submits.store');
Route::get('submits', 'SubmitsController@index')->name('submits.index');
//Route::get('submits/{code}/{idChallenge}', 'SubmitsController@show')->name('submits.show');
//Route::get('submits/{code}/{idChallenge}/edit', 'SubmitsController@edit')->name('submits.edit');

Route::get('users', 'UsersController@index')->name('users.index');
Route::post('users', 'UsersController@store')->name('users.store');
Route::get('users/{user}', 'UsersController@show')->name('users.show');
Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('users/{user}', 'UsersController@update')->name('users.update');
Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');


Route::get('dashboards', 'DashboardsController@index')->name('dashboards.index');





Route::get('/home', 'HomeController@index')->name('home');
