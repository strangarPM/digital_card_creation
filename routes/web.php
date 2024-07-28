<?php

use App\Http\Controllers\UserController;
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
Route::get('/card/{id}',[UserController::class, 'card_viewer'])->name('card-viewer');


Route::group(['prefix' => 'user'] , function(){
    Route::view('/dashboard','frontend.user.home')->name('user.dashboard');
    Route::view('/add-card','frontend.user.cards.add_card')->name('user.add-card');
    Route::view('/list-card','frontend.user.cards.list_card')->name('user.list-card');
});


//Admin
Route::group(['prefix' => 'admin'], function() {

    Route::view('login', 'admin.authentication.login')->name('admin.login');
    Route::view('home', 'admin.home')->name('admin.home');
    Route::view('settings', 'admin.home')->name('admin.settings');
    Route::view('add-room','admin.add-room')->name('admin.add-room');
    Route::view('user-list','admin.user-list')->name('admin.user-list');
});
