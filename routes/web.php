<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('layouts/App');
//     return view('Layouts.App');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/home/index',[HomeController::class,'index']);


Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'savedata']);

Route::get('/login',[RegisterController::class,'login']);
Route::post('/login',[RegisterController::class,'verify']);



Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin/brands',[BrandController::class,'Index']);
Route::get('/admin/brand/create',[BrandController::class,'CreateForm']);
Route::post('/admin/brand/create',[BrandController::class,'Save']);