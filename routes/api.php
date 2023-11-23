<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\PaymodeController;
use App\Http\Controllers\api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});

Route::get('/customers',[CustomerController::class, 'index'])->name('customers');
Route::post('/customers',[CustomerController::class, 'store'])->name('customers.store');
Route::delete('/customers/{customer}',[CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/{customer}',[CustomerController::class, 'show'])->name('customers.show');
Route::put('/customers/{customer}',[CustomerController::class, 'update'])->name('customers.update');

Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories',[CategoryController::class, 'index'])->name('categories');
Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{category}',[CategoryController::class, 'show'])->name('categories.show');
Route::put('/categories/{category}',[CategoryController::class, 'update'])->name('categories.update');

Route::get('/paymodes',[PaymodeController::class, 'index'])->name('paymodes');
Route::post('/paymodes',[PaymodeController::class, 'store'])->name('paymodes.store');
Route::delete('/paymodes/{paymode}',[PaymodeController::class, 'destroy'])->name('paymodes.destroy');
Route::get('/paymodes/{paymode}',[PaymodeController::class, 'show'])->name('paymodes.show');
Route::put('/paymodes/{paymode}',[PaymodeController::class, 'update'])->name('paymodes.update');

Route::get('/products',[ProductController::class, 'index'])->name('products');
Route::post('/products',[ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}',[ProductController::class, 'show'])->name('products.show');
Route::put('/products/{product}',[ProductController::class, 'update'])->name('products.update');