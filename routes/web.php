<?php

use Illuminate\Support\Facades\Route;

use App\Models\LogoType;
use App\Models\Design;
use App\Models\Display;
use App\Models\PremiumLogo;

use App\Http\Controllers\LogosController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PremiumLogoOrderController;

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
    $view = Display::find(1);
    if($view)
        $view = $view->view;
    else
        $view = 1;
    return view('website.index-5', [
        'industries' => LogoType::all(), 
        'view' =>  $view,
        'premiumLogos' => PremiumLogo::all()
    ]);
})->name('home');

Route::get('/premium', function(){
    return view('website.premium-logo-design', ['premiumLogos' => PremiumLogo::all()]);
})->name('premium');

// Route::get('/allLogos', [LogosController::class, 'allLogos'])->name('allLogos');
Route::post('/allLogos', [LogosController::class, 'allLogos'])->name('allLogos');

Route::get('/business-card-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Business Card Design')->get()
    ]);
})->name('businessCardDesign');

Route::get('/letter-head-design', function(){
    return view('website.letter-head',[
        'designCards' => Design::where('designCategory', '=', 'Letter Head Design')->get()
    ]);
})->name('letterHeadDesign');

Route::get('/t-shirt-design', function(){
    return view('website.T-shirt',[
        'designCards' => Design::where('designCategory', '=', 'T-Shirt Design')->get()
    ]);
})->name('tShirtDesign');

Route::get('/envelop-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Envelop Design')->get()
    ]);
})->name('envelopDesign');

Route::get('/web-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Web Design')->get()
    ]);
})->name('webDesign');

Route::get('/mug-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Mug Design')->get()
    ]);
})->name('mugDesign');

Route::get('/flyer-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Flyer Design')->get()
    ]);
})->name('flyerDesign');

Route::get('/signature-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Signature Design')->get()
    ]);
})->name('signatureDesign');

Route::get('/wedding-card-design', function(){
    return view('website.business-card',[
        'designCards' => Design::where('designCategory', '=', 'Wedding Card Design')->get()
    ]);
})->name('weddingCardDesign');

Route::post('/customizeLogo', [LogosController::class, 'customizeLogo'])->name('customizeLogo');
Route::get('/getFonts', [LogosController::class, 'getFonts'])->name('getFonts');

Route::post('/wishlist', [WishlistController::class, 'store'])->name('saveLogo');

Route::post('/cart', [CartController::class, 'store'])->name('purchaseLogo');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::delete('/deleteWishlistItem/{id}', [WishlistController::class, 'delete'])->name('deleteWishlistItem');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::delete('/deleteCartItem/{id}', [CartController::class, 'delete'])->name('deleteCartItem');

    Route::get('/checkout', [OrderController::class, 'create'])->name('checkout');
    Route::post('/checkout', [OrderController::class, 'store']);
    Route::get('/checkCoupon/{coupon}', [OrderController::class, 'checkCoupon'])->name('checkCoupon');

    Route::post('/premiumLogo', [PremiumLogoOrderController::class, 'store'])->name('premiumLogoBuy');

});

Route::group(['middleware'=>'guest'], function(){

    
});


require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
