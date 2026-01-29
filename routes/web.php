<?php

use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckTimeAccess;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

/*
|--------------------------------------------------------------------------
| PRODUCT ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/signin', 'signIn')->name('signin');
    Route::post('/check-signin', 'checkSignIn')->name('check.signin');
});


Route::get('/age', [AgeController::class, 'index']);
Route::post('/age/store', [AgeController::class, 'store']);

Route::get('/age/check', [AgeController::class, 'check'])
    ->middleware('check.age');




// // Các route KHÔNG bị check time (login, register)
// Route::prefix('product')->controller(ProductController::class)->group(function () {
//     Route::get('/login', 'login');
//     Route::post('/checkLogin', 'checkLogin');
//     Route::get('/register', 'register');
//     Route::post('/checkRegister', 'checkRegister');
// });

// // Các route BỊ check time
// Route::prefix('product')
//     ->middleware(CheckTimeAccess::class)
//     ->controller(ProductController::class)
//     ->group(function () {
//         Route::get('/', 'index')->name('product');
//         Route::get('/add', 'create')->name('add');
//         Route::get('/detail/{id?}', 'getDetail')->name('detail');
//         Route::post('/store', 'store');
//     });

/*
|--------------------------------------------------------------------------
| PAGE NOT FOUND
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return view('error.404');
});

/*
|--------------------------------------------------------------------------
| OTHER ROUTES
|--------------------------------------------------------------------------
*/

// Sinh viên
Route::get('/sinhvien/{name?}/{mssv?}', function (
    ?string $name = "Luong Xuan Hieu",
    ?string $mssv = "123456"
) {
    return view('sinhvien.index', [
        'name' => $name,
        'mssv' => $mssv
    ]);
});

// Bàn cờ
Route::get('/banco/{n}', function (int $n) {
    return view('banco.index', ['n' => $n]);
});