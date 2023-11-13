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



Route::middleware(['role:super_admin'])->group(function () {  
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
    Route::post('/acc_hse',[TrakingKendaraanController::class,'acc_hse']);

});
Route::middleware(['role:admin_in'])->group(function () {  
    Route::get('/admin_in',[TrakingKendaraanController::class,'admin_in']);
    Route::post('/acc_admin_in',[TrakingKendaraanController::class,'acc_admin_in']);
});
Route::middleware(['role:timbangan_in'])->group(function () { 
    Route::get('/timbangan_in',[TrakingKendaraanController::class,'timbangan_in']); 
    Route::post('/acc_timbangan_in',[TrakingKendaraanController::class,'acc_timbangan_in']); 
});
Route::middleware(['role:loading_bay'])->group(function () {  
    Route::get('/loading_bay',[TrakingKendaraanController::class,'loading_bay']); 
    Route::post('/acc_loading_bay',[TrakingKendaraanController::class,'acc_loading_bay']); 
});
Route::middleware(['role:timbangan_out'])->group(function () {  
    Route::get('/timbangan_out',[TrakingKendaraanController::class,'timbangan_out']); 
    Route::post('/acc_timbangan_out',[TrakingKendaraanController::class,'acc_timbangan_out']); 
});
Route::middleware(['role:admin_out'])->group(function () {  
    Route::get('/admin_out',[TrakingKendaraanController::class,'admin_out']); 
    Route::post('/acc_admin_out',[TrakingKendaraanController::class,'acc_admin_out']); 
});

Route::get('/ip',function(){
$check =geoip()->getLocation($_SERVER['REMOTE_ADDR']);
if ($check->ip === '::1') {
        // Convert IPv6 loopback to its IPv4 equivalent
        $check->ip = '127.0.0.1';
    }
return $check->toArray();
});