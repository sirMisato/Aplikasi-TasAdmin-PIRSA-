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

Route::get('/', function () {
    return view('superadmin.dashboard');
});

Route::middleware(['role:superadmin'])->group(function () {  
});
Route::middleware(['role:secuirty'])->group(function () {  
});
Route::middleware(['role:hse'])->group(function () {  
});
Route::middleware(['role:admin_in'])->group(function () {  
});
Route::middleware(['role:timbangan_in'])->group(function () {  
});
Route::middleware(['role:loading_bay'])->group(function () {  
});
Route::middleware(['role:timbangan_out'])->group(function () {  
});
Route::middleware(['role:admin_out'])->group(function () {  
});
