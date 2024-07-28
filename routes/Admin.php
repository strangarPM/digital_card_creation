<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//Admin

// Route::group(['prefix' => 'admin'], function() {

    
//     Route::post('doLogin',[AdminController::class, 'doLogin'])->name('admin.doLogin');
//     Route::view('login', 'admin.authentication.login')->name('admin.login');


//     Route::group(['middleware' => 'admin'], function() {

//         Route::post('getAllReportByAdmin',[AdminController::class,'getAllReportByAdmin']);
//         Route::post('doLogout',[AdminController::class,'doLogout']);
//         Route::view('home', 'admin.home')->name('admin.home');
//         Route::view('settings', 'admin.home')->name('admin.settings');
//         Route::view('add-room','admin.add-room')->name('admin.add-room');
//         Route::view('room-list','admin.room-list')->name('admin.room-list');

//     });
    
// });