<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
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

Route::get('/welcome', function () {
   return view('welcome');
});




route::get('/', [HomeController::class, 'index']);
route::get('/contact', [HomeController::class, 'contact']);
Route::get('login', [loginController::class,'index']);
Route::get('dashboard', [dashboardController::class,'index']);
Route::get('list_item', [listitemController::class,'index']);


Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return 'Admin Dashoard';
    });
    Route::get('/users', function () {
        return('Admin Users');
    });
});

//oute::get('/listbarang/{id}/{nama}', function($id, $nama){
 //   return view('list_barang', compact('id', 'nama'));
//});

route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);