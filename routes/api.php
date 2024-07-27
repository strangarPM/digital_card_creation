<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\loginController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('doRegister', [loginController::class,'doRegister'])->name('doRegister');
Route::post('doLogin', [loginController::class, 'doLogin'])->name('doLogin');

Route::group(['prefix' => 'user','middleware' => ['auth:sanctum']], function() {
    Route::post('create_card',[UserController::class,'create_card'])->name('api.user.create_card');
    Route::get('card_list',[UserController::class,'card_list'])->name('api.user.card_list');
    Route::post('delete_card',[UserController::class,'delete_card'])->name('api.user.delete_card');
});