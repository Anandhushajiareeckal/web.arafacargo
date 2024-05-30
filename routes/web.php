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

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/about',[App\Http\Controllers\FrontendController::class, 'about']);
Route::get('/tracking',[App\Http\Controllers\FrontendController::class, 'tracking']);
Route::get('/contact',[App\Http\Controllers\FrontendController::class, 'contact']);
Route::get('/gallery',[App\Http\Controllers\FrontendController::class, 'gallery']);
Route::get('/service',[App\Http\Controllers\FrontendController::class, 'service']);

Route::post('/tracking',[App\Http\Controllers\TrackingController::class, 'tracking'])->name('tracking');
