<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\InforController;
use App\Mail\GuiEmail;

Route::get('admin/login',[LoginController::class, 'index']);
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

        #LOGO
        Route::prefix('logos')->group(function (){

            Route::get('add',[LogoController::class, 'create']);
            Route::post('add',[LogoController::class, 'store']);
            Route::get('list',[LogoController::class, 'index']);
            Route::get('edit/{logo}',[LogoController::class, 'show']);
            Route::post('edit/{logo}',[LogoController::class, 'update']);
            Route::DELETE('destroy',[LogoController::class, 'destroy']);
        });
        #BLOG
        Route::prefix('blogs')->group(function (){

            Route::get('add',[BlogController::class, 'create']);
            Route::post('add',[BlogController::class, 'store']);
            Route::get('list',[BlogController::class, 'index']);
            Route::get('edit/{blog}',[BlogController::class, 'show']);
            Route::post('edit/{blog}',[BlogController::class, 'update']);
            Route::DELETE('destroy',[BlogController::class, 'destroy']);
        });
        #INFORMATION
        Route::prefix('infors')->group(function (){

            Route::get('add',[InforController::class, 'create']);
            Route::post('add',[InforController::class, 'store']);
            Route::get('list',[InforController::class, 'index']);
            Route::get('edit/{infor}',[InforController::class, 'show']);
            Route::post('edit/{infor}',[InforController::class, 'update']);
            Route::DELETE('destroy',[InforController::class, 'destroy']);
        });
    });


});

Route::get('/',[IndexController::class, 'index']);
Route::post('/services/load-product',[IndexController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html',[App\Http\Controllers\MenusController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html',[App\Http\Controllers\ProductsController::class, 'index']);
Route::get('{id}-{slug}.html',[App\Http\Controllers\ProductsController::class, 'shows']);
Route::post('add-cart',[App\Http\Controllers\CartController::class, 'index'] );
Route::get('carts',[App\Http\Controllers\CartController::class, 'show'] );
Route::post('update-cart',[App\Http\Controllers\CartController::class, 'update'] );
Route::get('carts/delete/{id}',[App\Http\Controllers\CartController::class, 'remove'] );
Route::post('carts',[App\Http\Controllers\CartController::class, 'addCart'] );

Route::get('tin-tuc',[App\Http\Controllers\BlogsController::class, 'index']);
Route::get('blog-detail/{id}-{slug}.html',[App\Http\Controllers\BlogsController::class, 'shows']);
Route::get('gioi-thieu',[App\Http\Controllers\InforsController::class, 'index']);

// CONTACT
Route::get('lien-he', [App\Http\Controllers\ContactsController::class, 'index']);
Route::post('guilienhe', [App\Http\Controllers\ContactsController::class, 'submitContactForm']);
