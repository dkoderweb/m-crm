<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\BrokersController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/properties',[PropertiesController::class,'index'])->name('properties');
Route::get('/properties/add-seller',[PropertiesController::class,'add_seller'])->name('properties.add_seller');
Route::post('/properties/add-seller/store',[PropertiesController::class,'store'])->name('properties.add_seller.store'); 

Route::get('/properties/add-buyer',[PropertiesController::class,'add_buyer'])->name('properties.add_buyer');




Route::get('/brokers-list', [BrokersController::class,'index'])->name('brokers');

Route::get('/profile', [ProfileController::class,'index'])->name('profile');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback(function(){
    return "Not Available";
});
