<?php

// Mengimpor controller dan kelas Route yang diperlukan
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemController;

// Mendefinisikan route untuk URL root ('/') yang akan menampilkan view 'welcome'
Route::get('/', function () {
    return view('welcome');
});

// Mendefinisikan route untuk URL '/welcome' yang juga akan menampilkan view 'welcome'
Route::get('/welcome', function () {
    return view('welcome');
});

// Mendefinisikan route untuk URL '/user/{id}' yang akan menampilkan teks dengan ID user
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// Mengelompokkan route di bawah prefix 'admin'
Route::prefix('admin')->group(function () {
    // Mendefinisikan route untuk URL '/admin/dashboard' yang akan menampilkan teks 'Admin Dashboard'
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    // Mendefinisikan route untuk URL '/admin/users' yang akan menampilkan teks 'Admin Users'
    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// Mendefinisikan route untuk URL '/listbarang{id}/{nama}' yang akan memanggil method 'tampilkan' pada ListBarangController
Route::get('/listbarang{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// Mendefinisikan route untuk URL '/login' yang akan memanggil method 'index' pada LoginController
Route::get('/login', [LoginController::class, 'index']);

// Mendefinisikan route untuk URL '/dashboard' yang akan memanggil method 'index' pada DashboardController
Route::get('/dashboard', [DashboardController::class, 'index']);

// Mendefinisikan route untuk URL '/list-item' yang akan memanggil method 'index' pada ListItemController
Route::get('/list-item', [ListItemController::class, 'index']);

// Mendefinisikan route untuk URL '/about' yang akan menampilkan view 'about'
Route::get('about', function () {
    return view('about');
});
