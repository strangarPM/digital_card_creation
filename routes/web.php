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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
Route::view('/','frontend.home')->name('index');
Route::view('login','auth.login')->name('login');
Route::view('register','auth.register')->name('register');
Route::view('about-us','frontend.about-us')->name('about-us');
Route::view('contact','frontend.contact')->name('contact');
