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

Route::prefix('superadmin')->group(function () {
    Route::get('/akun',[AkunController::class,'index']);
    Route::get('/akun/tambah',[AkunController::class,'tambah']);
    Route::post('/akun/tambah',[AkunController::class,'store']);
    Route::get('/akun/edit/{id}',[AkunController::class,'edit']);
    Route::post('/akun/update/{id}',[AkunController::class,'update']);
    Route::get('/akun/delete/{id}',[AkunController::class,'delete']);
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
