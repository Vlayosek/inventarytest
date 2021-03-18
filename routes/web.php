<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InventaryInCabController;
use App\Http\Controllers\InventaryInDetController;
use App\Http\Controllers\InventaryOutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return redirect('login');
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user/filltable',[UserController::class, 'fillTable'])->name('user.table');
Route::resource('user', UserController::class);
Route::get('/area/filltable',[AreaController::class, 'fillTable'])->name('area.table');
Route::resource('area', AreaController::class);
Route::resource('article', ArticleController::class);
Route::resource('category', CategoryController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('inventaryincab', InventaryInCabController::class);
Route::resource('inventaryindet', InventaryInDetController::class);
Route::resource('inventaryout', InventaryOutController::class);
Route::resource('product', ProductController::class);
Route::resource('supplier', ProveedorController::class);

Auth::routes();



// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
