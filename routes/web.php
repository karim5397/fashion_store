<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\FacebookSocialiteController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

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





Route::middleware([
    'auth:sanctum',
    'verified',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
// Route::get('/email/verify', function () {
//    return view('auth.verify-email');
// })->middleware(['auth' , 'verified'])->name('verification.notice');
Route::get('/redirect/' , [HomeController::class , 'redirect'])->name('redirect');
Route::get('/' , [HomeController::class , 'index'] );
Route::get('/search' ,[HomeController::class , 'searchProduct'])->name('search');
Route::post('/addcart/{id}' , [HomeController::class , 'addCart'] )->name('add-cart');
Route::get('/showcart' , [HomeController::class , 'showCart'] )->name('show-cart');
Route::get('/deletecart/{id}' , [HomeController::class , 'deleteCart'] )->name('delete-cart');
Route::post('/order' , [HomeController::class , 'confirmOrder'] )->name('order');
Route::get('/mencategory' , [HomeController::class , 'menCategory'] )->name('men-category');
Route::get('/womencategory' , [HomeController::class , 'womenCategory'] )->name('women-category');
Route::get('/childcategory' , [HomeController::class , 'childCategory'] )->name('child-category');
Route::get('/auth/facebook/redirect', [FacebookController::class, 'handlefacebookRedirect'])->name('redirect-fb');
Route::get('/auth/facebook/callback', [FacebookController::class, 'handlefacebookCallback'])->name('callback-fb');

