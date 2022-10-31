<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Order;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogosController;
use App\Http\Controllers\LogoTypesController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DesignCategoryController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\PremiumLogoController;
use App\Http\Controllers\OrderController;


//admin panel

Route::group(['middleware'=>'isAdmin'], function(){

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/editpassword/{username}', [AdminsController::class, 'edit'])->name('editPassView');
    Route::post('/editpassword/{admin}', [AdminsController::class, 'editStore'])->name('editPass');
    Route::get('/addUser', [AdminsController::class, 'addUser'])->name('addUser');
    Route::post('/addUser', [AdminsController::class, 'storeUser']);
    Route::get('/logout/{username}', [AdminsController::class, 'destroy'])->name('logoutAdmin');

    Route::get('/addLogoType', [LogoTypesController::class, 'index'])->name('addLogoType');
    Route::post('/addLogoType', [LogoTypesController::class, 'store']);
    Route::delete('/deleteLogoType/{id}', [LogoTypesController::class, 'delete'])->name('deleteLogoType');

    Route::get('/addColor', [ColorsController::class, 'index'])->name('addColor');
    Route::post('/addColor', [ColorsController::class, 'store']);
    Route::delete('/deleteColor/{id}', [ColorsController::class, 'delete'])->name('deleteColor');

    Route::get('/logos', [LogosController::class, 'index'])->name('logos');
    Route::get('/addLogo', [LogosController::class, 'addLogo'])->name('addLogo');
    Route::post('/addLogo', [LogosController::class, 'store']);
    Route::get('/editLogo/{id}', [LogosController::class, 'edit'])->name('editLogo');
    Route::put('/editLogo/{id}', [LogosController::class, 'update']);
    Route::delete('/deleteLogo/{id}', [LogosController::class, 'delete'])->name('deleteLogo');

    Route::get('/addDesignCategory', [DesignCategoryController::class, 'index'])->name('addDesignCategory');
    Route::post('/addDesignCategory', [DesignCategoryController::class, 'store']);
    Route::delete('/deleteDesignCategory/{id}', [DesignCategoryController::class, 'delete'])->name('deleteDesignCategory');

    Route::get('/designs', [DesignController::class, 'index'])->name('designs');
    Route::get('/addDesign', [DesignController::class, 'create'])->name('addDesign');
    Route::post('/addDesign', [DesignController::class, 'store']);
    Route::get('/editDesign/{id}', [DesignController::class, 'edit'])->name('editDesign');
    Route::put('/editDesign/{id}', [DesignController::class, 'update']);
    Route::delete('/deleteDesign/{id}', [DesignController::class, 'delete'])->name('deleteDesign');

    Route::get('/coupons', [CouponController::class, 'index'])->name('coupons');
    Route::get('/addCoupon', [CouponController::class, 'create'])->name('addCoupon');
    Route::post('/addCoupon', [CouponController::class, 'store']);
    Route::get('/editCoupon/{id}', [CouponController::class, 'edit'])->name('editCoupon');
    Route::put('/editCoupon/{id}', [CouponController::class, 'update']);
    Route::delete('/deleteCoupon/{id}', [CouponController::class, 'delete'])->name('deleteCoupon');

    Route::get('/font', [FontController::class, 'index'])->name('fonts');
    Route::post('/addFont', [FontController::class, 'store'])->name('addFont');
    Route::delete('/deleteFont/{id}', [FontController::class, 'delete'])->name('deleteFont');

    Route::get('/premiumLogos', [PremiumLogoController::class, 'index'])->name('premiumLogos');
    Route::get('/addPremiumLogo', [PremiumLogoController::class, 'create'])->name('addPremiumLogo');
    Route::post('/addPremiumLogo', [PremiumLogoController::class, 'store']);
    Route::get('/editPremiumLogo/{id}', [PremiumLogoController::class, 'edit'])->name('editPremiumLogo');
    Route::put('/editPremiumLogo/{id}', [PremiumLogoController::class, 'update']);
    Route::delete('/deletePremiumLogo/{id}', [PremiumLogoController::class, 'delete'])->name('deletePremiumLogo');

    Route::get('/users', function(){
        return view('users', [
            'users' => User::all(),
        ]);
    })->name('users');

    Route::get('/wishlists', function(){
        return view('wishlists', [
            'wishlists' => Wishlist::all(),
        ]);
    })->name('wishlists');

    Route::get('/carts', function(){
        return view('carts', [
            'carts' => Cart::all(),
        ]);
    })->name('carts');

    Route::get('/orders', function(){
        return view('orders', [
            'orders' => Order::all(),
        ]);
    })->name('orders');

    Route::get('/orderComplete/{id}', function($id){
        $order = Order::find($id);
        $order->isCompleted = 1;
        $order->save();
        return redirect()->route('orders');
    })->name('orderComplete');

    Route::get('/orderIncomplete/{id}', function($id){
        $order = Order::find($id);
        $order->isCompleted = 0;
        $order->save();
        return redirect()->route('orders');
    })->name('orderIncomplete');

    Route::get('/changeDisplay', [LogosController::class, 'changeDisplay'])->name('changeDisplay');

    Route::get('/guide', function(){
        return view('guide');
    })->name('guide');

});

Route::group(['middleware'=>'isNotAdmin'], function(){

    Route::get('/loginAdmin', function(){
        return view('adminLogin');
    })->name('adminLogin');
    Route::post('/loginAdmin', [AdminsController::class, 'adminLogin'])->name('adminLogin');

});