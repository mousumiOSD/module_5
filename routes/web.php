<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CollectionController;


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

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
});


Route::prefix('collections')->group(function () {
    Route::get('/', [CollectionController::class, 'index'])->name('collections.index');
    Route::get('/create', [CollectionController::class, 'create'])->name('collections.create');
    Route::post('/store', [CollectionController::class, 'store'])->name('collections.store');
    Route::get('/edit/{id}', [CollectionController::class, 'edit'])->name('collections.edit');
});
