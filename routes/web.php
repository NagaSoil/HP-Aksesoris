<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\listitemController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('login', [loginController::class,'login']);
Route::get('login', [loginController::class,'login']);


//Route::get('/user/{id}', function ($id) {
//    return 'User dengan ID ' . $id;
//});

//Route::prefix('admin')->group(function () {
//    Route::get('/dashboard', function() {
//        return 'Admin Dashoard';
//    });
//    Route::get('/users', function () {
//        return('Admin Users');
//    });
//});

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class,'tampilkan']);