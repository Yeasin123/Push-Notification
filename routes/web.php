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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send.message', [App\Http\Controllers\HomeController::class, 'sendMessage'])->name('send.message');
Route::patch('/fcm-token', [App\Http\Controllers\HomeController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[App\Http\Controllers\HomeController::class,'notification'])->name('notification');