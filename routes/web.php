<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEnd\ProductController as FrontEndProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductImageController;

// Route::get('/', function () {
//     // return view('layouts/App');
//     return view('Layouts.App');
// });


Route::get('/clear-commands',function()
{
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    return "commands run successfully";
});


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/home/index',[HomeController::class,'index']);

Route::get('/products/{slug}/{id}',[FrontEndProductController::class,'index']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'savedata']);

Route::get('/login',[RegisterController::class,'login']);
Route::get('/logout',[RegisterController::class,'logout']);
Route::post('/login',[RegisterController::class,'verify']);

Route::get('/testing',[AdminController::class,"Testing"]);



Route::prefix('/admin')->middleware(['admin'])->group(function(){

    // index routes
    Route::get('/',[CategoryController::class,'index']);
    Route::get('/category',[CategoryController::class,'index']);
    // create routes
    Route::get('/category/create',[CategoryController::class,'create']);
    Route::post('/category/create',[CategoryController::class,'store']);
    // // update routes
    Route::get('/category/{category}/edit/{id}',[CategoryController::class,'edit']);
    Route::put('/category/{category}/edit/{id}',[CategoryController::class,'update']);
    // // delete routes
    Route::get('/category/{id}/delete',[CategoryController::class,'destroy']);
    

    Route::controller(BrandController::class)->group(function(){

    Route::get('/brands','index');        
    Route::get('/all-brands','allbrands');        
    Route::post('/brand/create','store');        
    Route::get('/api/brand/{id}','fetchdata');        
    Route::post('/api/brand/update/{id}','updatedata');        
    Route::get('/api/brand/delete/{id}','deletedata');        


    });

    Route::controller(ProductController::class)->group(function(){

        Route::get('/products','index');
        Route::get('/product/create','create');
        Route::post('/product/create','save');
        Route::get('/product/{id}/edit','edit');
        Route::get('/product/{id}/delete','deleteproduct');
        Route::put('/product-update/{id}','updateproduct');
        Route::get('/product-image/{id}/delete','deleteimage');
        Route::post('/product-color/{id}','updatecolor'); // ajax
        Route::get('/product-color/{id}/delete','deletecolor'); // ajax



    });
   
    Route::controller(ColorController::class)->group(function(){

        Route::get('/colors','index');
        Route::get('/color/create','create');
        Route::post('/color/save','save');
        Route::get('/color/edit/{id}','edit');
        Route::put('/color/update/{id}','update');
        Route::get('/color/delete/{id}','delete');



    });




});











// Route::prefix('/admin')->middleware(['admin'])->group(function(){

//     Route::get('/',[AdminController::class,'index']);

//     // Route::get('/brands',[BrandController::class,'Index'])->middleware('admin');
//     Route::get('/brands',[BrandController::class,'Index']);
//     Route::get('/api/all-brands',[BrandController::class,'APIBrands']);
//     Route::get('/brand/create',[BrandController::class,'CreateForm']);
//     Route::post('/brand/create',[BrandController::class,'Save']);
    
//     Route::get('/brand/update/{id}',[BrandController::class,'UpdateForm']);
//     Route::post('/brand/update/{id}',[BrandController::class,'UpdateData']);
//     Route::get('/brand/{id}/delete',[BrandController::class,'DeleteBrand']);
    
//     // put patch delete any 
    
//     // Route::get('/admin/products',[ProductController::class,'index']);

//     Route::controller(ProductController::class)->group(function(){
    
//     Route::get('/products','index');

//     // Route::get('/temp','tempdemo');

//     Route::get('/product/create','createform');
//     Route::post('/product/create','savedata');
    
//     Route::get('/product/update/{id}','updateform');
//     Route::put('/product/update/{id}','saveupdatedata');
//     // Route::patch('/product/update/{id}','saveupdatedata');
    
//     Route::delete('/product/delete/{id}','deletedata');
//     // Route::get('/product/delete/{id}','deletedata');

// });

//     Route::controller(ProductImageController::class)->group(function()
//     {
//         Route::get('/product-images','index');

//         Route::get('/product-images/create','createform');
//         Route::post('/product-images/create','saveform');
//     });





// });