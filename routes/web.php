<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('layouts/App');
//     return view('Layouts.App');
// });



Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/home/index',[HomeController::class,'index']);


Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'savedata']);

Route::get('/login',[RegisterController::class,'login']);
Route::post('/login',[RegisterController::class,'verify']);