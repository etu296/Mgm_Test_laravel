<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemLandingController;
use App\Http\Controllers\SupplierController;

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
    return view('welcome');
});
//item
Route::get('/itemLanding',[itemLandingController::class,'itemLanding'])->name('admin.item.itemlanding');
Route::get('/createItem',[itemLandingController::class,'createItem'])->name('admin.item.createItem');
Route::get('/itemTypesLanding',[itemLandingController::class,'itemTypesLanding'])->name('admin.item.itemTypesLanding');
Route::get('/createItemTypes',[itemLandingController::class,'createItemTypes'])->name('admin.item.createItemTypes');
Route::post('/storeItemTypes',[itemLandingController::class,'storeItemTypes'])->name('storeItemTypes');
Route::get('/itemCategoryLanding',[itemLandingController::class,'itemCategoryLanding'])->name('admin.item.itemCategoryLanding');
Route::get('/createItemCategory',[itemLandingController::class,'createItemCategory'])->name('admin.item.createItemCategory');
Route::post('/storeItemCategory',[itemLandingController::class,'storeItemCategory'])->name('storeItemCategory');

//supplier
Route::get('/supplierLanding',[SupplierController::class,'supplierLanding'])->name('admin.supplier.supplierLanding');
Route::get('/createSupplier',[SupplierController::class,'createSupplier'])->name('admin.supplier.createSupplier');
Route::post('/storeSupplier',[SupplierController::class,'storeSupplier'])->name('storeSupplier');
