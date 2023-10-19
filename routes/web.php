<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrakingKendaraanController;
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

// Route::get('/', function () {
//     return view('superadmin.dashboard');
// });
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('postlogin', [AuthController::class, 'postlogin']);
Route::post('postregister', [AuthController::class, 'postregister']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/',[AuthController::class,'login'])->name('login');



Route::middleware(['auth'])->group(function () {  
    Route::get('/dashboard',[TrakingKendaraanController::class,'dashboard']);
});



Route::middleware(['role:superadmin'])->group(function () {  
    Route::prefix('superadmin')->group(function () {
        Route::get('/akun',[AkunController::class,'index']);
        Route::get('/akun/tambah',[AkunController::class,'tambah']);
        Route::post('/akun/tambah',[AkunController::class,'store']);
        Route::get('/akun/edit/{id}',[AkunController::class,'edit']);
        Route::post('/akun/update/{id}',[AkunController::class,'update']);
        Route::get('/akun/delete/{id}',[AkunController::class,'delete']);
    });
    
});
Route::middleware(['role:security'])->group(function () {  
    Route::get('/security',[TrakingKendaraanController::class,'security']);
    Route::post('/acc_security',[TrakingKendaraanController::class,'acc_security']);
});
Route::middleware(['role:hse'])->group(function () {  
    Route::get('/hse',[TrakingKendaraanController::class,'hse']);
});
Route::middleware(['role:admin_in'])->group(function () {  
    Route::get('/admin_in',[TrakingKendaraanController::class,'admin_in']);
});
Route::middleware(['role:timbangan_in'])->group(function () { 
    Route::get('/timbangan_in',[TrakingKendaraanController::class,'timbangan_in']); 
});
Route::middleware(['role:loading_bay'])->group(function () {  
    Route::get('/loading_bay',[TrakingKendaraanController::class,'loading_bay']); 
});
Route::middleware(['role:timbangan_out'])->group(function () {  
    Route::get('/timbangan_out',[TrakingKendaraanController::class,'timbangan_out']); 
});
Route::middleware(['role:admin_out'])->group(function () {  
    Route::get('/admin_out',[TrakingKendaraanController::class,'admin_out']); 
});
