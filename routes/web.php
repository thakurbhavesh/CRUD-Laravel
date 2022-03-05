<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\userController;

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
Route::post('/register',[userController::class,'store']);
Route::get('/showdata',[userController::class,'show']);
Route::get('delete/{id}',[userController::class,'destroy']);
Route::view('/update','update');
Route::view('/login','login');
Route::get('/upd/{id}',[userController::class,'edit']);
Route::post('/update/{id}',[userController::class,'singh']);
Route::post('/log',[userController::class,'login']);
//Route::post('/profile',[userController::class,'login']);