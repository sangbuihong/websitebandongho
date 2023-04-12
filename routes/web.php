<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\InformationController;


Route::get('admin/users/login',[LoginController::class, 'index']);
Route::post('admin/users/login/store',[LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () { //kiem tra da dang nhap hay chua

    Route::prefix('admin')->group(function(){

        Route::get('/',[MainController::class, 'index'])->name('admin');
        Route::get('main',[MainController::class, 'index']);

        #MENU
        Route::prefix('menus')->group(function(){

            Route::get('add',[MenuController::class, 'create']);
            Route::post('add',[MenuController::class, 'store']);
            Route::get('list',[MenuController::class, 'index']);
            Route::get('edit/{menu}',[MenuController::class, 'show']);
            Route::post('edit/{menu}',[MenuController::class, 'update']);
            Route::DELETE('destroy',[MenuController::class, 'destroy']);
        });

        #PRODUCT
        Route::prefix('products')->group(function(){

            Route::get('add',[ProductController::class, 'create']);
            Route::post('add',[ProductController::class, 'store']);
            Route::get('list',[ProductController::class, 'index']);
            Route::get('edit/{product}',[ProductController::class, 'show']);
            Route::post('edit/{product}',[ProductController::class, 'update']);
            Route::DELETE('destroy',[ProductController::class, 'destroy']);
        });

        #SLIDER
        Route::prefix('sliders')->group(function (){

            Route::get('add',[SliderController::class, 'create']);
            Route::post('add',[SliderController::class, 'store']);
            Route::get('list',[SliderController::class, 'index']);
            Route::get('edit/{slider}',[SliderController::class, 'show']);
            Route::post('edit/{slider}',[SliderController::class, 'update']);
            Route::DELETE('destroy',[SliderController::class, 'destroy']);
        });
        #UPLOAD
        Route::post('upload/services', [UploadController::class, 'store']);

        #CART
        Route::get('customers', [CartController::class, 'index']);
        Route::get('customers/view/{customer}', [CartController::class, 'show']);

        #INFORMATION
        Route::prefix('informations')->group(function (){

            Route::get('add',[InformationController::class, 'create']);
            Route::post('add',[InformationController::class, 'store']);
            Route::get('list',[InformationController::class, 'index']);
            Route::get('edit/{information}',[InformationController::class, 'show']);
            Route::post('edit/{information}',[InformationController::class, 'update']);
            Route::DELETE('destroy',[InformationController::class, 'destroy']);
        });
    });


});

Route::get('/',[IndexController::class, 'index']);
Route::post('/services/load-product',[IndexController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html',[App\Http\Controllers\MenusController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html',[App\Http\Controllers\ProductsController::class, 'index']);
Route::post('add-cart',[App\Http\Controllers\CartController::class, 'index'] );
Route::get('carts',[App\Http\Controllers\CartController::class, 'show'] );
Route::post('update-cart',[App\Http\Controllers\CartController::class, 'update'] );
Route::get('carts/delete/{id}',[App\Http\Controllers\CartController::class, 'remove'] );
Route::post('carts',[App\Http\Controllers\CartController::class, 'addCart'] );
