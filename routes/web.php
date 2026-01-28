<?php

use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

// Product
Route::prefix('product')->middleware(CheckTimeAccess::class)->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('product');
        Route::get('/add', 'create')->name('add');
        Route::get('/detail/{id?}', 'getDetail')->name('detail');
        Route::post('/store', 'store');
        Route::get('/login', 'login');
        Route::post('/checkLogin', 'checkLogin');
        Route::get('/register', 'register');
        Route::post('/checkRegister', 'checkRegister');
    });
});

// Page Not Found
Route::fallback(function () {
    return View("error.404");
});

// Sinh viên
Route::get('/sinhvien/{name?}/{mssv?}', function (?string $name = "Luong Xuan Hieu", ?string $mssv = "123456") {
    return view('sinhvien.index', ['name' => $name, 'mssv' => $mssv]);
});

// Bàn cờ
Route::get('/banco/{n}', function (int $n) {
    return view('banco.index', ['n' => $n]);
});
