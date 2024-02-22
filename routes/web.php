<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class, 'index']);
Route::get('biodata',[HomeController::class, 'biodata']);
Route::get('input', [App\Http\Controllers\InputController::class, 'viewPostData']);
Route::post('input', [App\Http\Controllers\InputController::class, 'processPostData']);
Route::get('getdata', [App\Http\Controllers\GetDataController::class, 'viewGetData']);