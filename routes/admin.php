<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth' ,'verified')->name('verification.notice');




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
Route::get('/user' , [UserController::class ,'index'])->name('user-index');
Route::get('/createuser' ,[UserController::class , 'create'])->name('create-user');
Route::post('/storeuser' ,[UserController::class , 'store'])->name('store-user');
Route::get('/edituser/{id}' ,[UserController::class , 'edit'])->name('edit-user');
Route::post('/updateuser/{id}' ,[UserController::class , 'update'])->name('update-user');
Route::get('/deleteuser/{id}' ,[UserController::class , 'destroy'])->name('delete-user');
Route::get('/product' , [AdminController::class , 'product'] )->name('product');
Route::post('/uploadproduct' , [AdminController::class , 'uploadProduct'] )->name('uploadproduct');
Route::get('/showproduct' , [AdminController::class , 'showProduct'] )->name('showproduct');
Route::get('/deleteproduct/{id}' ,[AdminController::class , 'deleteProduct'])->name('delete-product');
Route::get('/updateproduct/{id}' ,[AdminController::class , 'updateProduct'])->name('update-product');
Route::post('/editproduct/{id}' ,[AdminController::class , 'editProduct'])->name('edit-product');
Route::get('/showorder' , [AdminController::class , 'showOrder'] )->name('show-order');
Route::get('/updatestatus/{id}' , [AdminController::class , 'updateOrderStatus'] )->name('update-status');
