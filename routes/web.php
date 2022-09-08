<?php

use App\Models\LogoType;
use App\Models\Logo;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LogosController;
use App\Http\Controllers\LogoTypesController;
use App\Http\Controllers\ColorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminsController;

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
    return view('website.index-5', ['industries' => LogoType::all()]);
})->name('home');

// Route::get('/allLogos', [LogosController::class, 'allLogos'])->name('allLogos');
Route::post('/allLogos', [LogosController::class, 'allLogos'])->name('allLogos');

Route::post('/customizeLogo', [LogosController::class, 'customizeLogo'])->name('customizeLogo');

Route::get('/business-card-design', function(){
    return view('website.business-card');
})->name('businessCardDesign');

Route::get('/letter-head-design', function(){
    return view('website.letter-head');
})->name('letterHeadDesign');

Route::get('/t-shirt-design', function(){
    return view('website.T-shirt');
})->name('tShirtDesign');

Route::get('/envelop-design', function(){
    return view('website.business-card');
})->name('envelopDesign');

Route::get('/web-design', function(){
    return view('website.business-card');
})->name('webDesign');

Route::get('/mug-design', function(){
    return view('website.business-card');
})->name('mugDesign');

Route::get('/flyer-design', function(){
    return view('website.business-card');
})->name('flyerDesign');

Route::get('/signature-design', function(){
    return view('website.business-card');
})->name('signatureDesign');

Route::get('/wedding-card-design', function(){
    return view('website.business-card');
})->name('weddingCardDesign');

Route::group(['middleware'=>'auth'], function(){

    
});

Route::group(['middleware'=>'guest'], function(){

    
});

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

    Route::get('/Logos', [LogosController::class, 'index'])->name('logos');
    Route::get('/addLogo', [LogosController::class, 'addLogo'])->name('addLogo');
    Route::post('/addLogo', [LogosController::class, 'store']);
    Route::get('/editLogo/{id}', [LogosController::class, 'edit'])->name('editLogo');
    Route::put('/editLogo/{id}', [LogosController::class, 'update']);
    Route::delete('/deleteLogo/{id}', [LogosController::class, 'delete'])->name('deleteLogo');

});

Route::group(['middleware'=>'isNotAdmin'], function(){
    Route::get('/loginAdmin', function(){
        return view('adminLogin');
    })->name('adminLogin');
    Route::post('/loginAdmin', [AdminsController::class, 'adminLogin'])->name('adminLogin');
});

require __DIR__.'/auth.php';
