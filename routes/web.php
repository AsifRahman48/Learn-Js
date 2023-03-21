<?php

use App\Http\Controllers\LearnJSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueueController;

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

Route::get('/total', function () {
    return view('Total');
});

Route::get('/send-mail',[QueueController::class,'queue']);
Route::get('/send-mail2',[QueueController::class,'queue2']);
Route::get('/send-mail3',[QueueController::class,'queue3']);
Route::get('/send-mail4',[QueueController::class,'queue4']);
Route::get('/send-mail5',[QueueController::class,'queue5']);
Route::get('/batching',[QueueController::class,'batching']);
Route::get('/learn-js',[LearnJSController::class,'js']);
Route::get('/invoice',[LearnJSController::class,'invoice']);
