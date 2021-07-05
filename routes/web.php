<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\PostController; 

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

Route::get('/profile', function () {
    return view('forms');
});

Route::post('/profile', function () {
    return view('forms');
});


Route::get('/forms', 'HomeController@index'); 

Route::get('forms', [HomeController::class, 'index']);

Route::get('forms', [PostController::class, 'index']);

Route::resource('home', HomeController::class); 

Route::resource('forms', PostController::class);


Route::resource('home', 'App\Http\Controllers\HomeController', ['except' => ['create', 'edit']]);







