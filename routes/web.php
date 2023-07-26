<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemLandingController;

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
Route::get('/itemLanding',[itemLandingController::class,'itemLanding'])->name('admin.item.itemlanding');
Route::get('/createItem',[itemLandingController::class,'createItem'])->name('admin.item.createItem');

