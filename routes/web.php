<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/user/{id}', function ($id){
    return 'User dengan ID ' . $id;
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
});

Route::get('/users', function () {
    return 'Admin Users';
});
});

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
//     });

Route::get ('/listbarang{id}/{nama}', [ ListBarangController::class, 'tampilkan']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/list-item', [ListItemController::class, 'index']);