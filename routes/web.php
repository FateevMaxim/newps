<?php

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/pricelist', [App\Http\Controllers\MainController::class, 'pricelist'])->name('pricelist');


Route::get('/doctors', function () {
    return view('doctors');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function (){
    Route::resource('/price', 'App\Http\Controllers\PriceControllerResourse');
});


