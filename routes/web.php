<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', 'App\Http\Controllers\PagesController@index');
// Route::get('/summed', 'App\Http\Controllers\PagesController@summed');
// Route::get('/newpol', 'App\Http\Controllers\PagesController@newpol');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('results', 'App\Http\Controllers\ResultsController');
