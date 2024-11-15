<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','land.index')->name('home');

Route::resource('items',InventoryController::class);
Route::resource('categories',CategoryController::class);
Route::resource('suppliers',SupplierController::class);

Route::middleware('guest')->group(function(){

Route::view('/register','auth.register')->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthController::class,'login']);
    
});

Route::middleware('auth')->group(function(){
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});



