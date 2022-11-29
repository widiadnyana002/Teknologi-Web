<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/loginpage', function () {
    return view('layouts.loginpage');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('loginpage');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/orderpage/{product_id}', [HomeController::class, 'orderPage']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/cart', [HomeController::class, 'cart']);
Route::post('/loginpage', [UserController::class, 'loginPage']);
Route::get('/cartlist', [HomeController::class, 'cartList']);
Route::get('/cartremove/{id}', [HomeController::class, 'cartRemove']);
Route::get('/orderremove/{id}', [HomeController::class, 'orderRemove']);
Route::get('/ordernow', [HomeController::class, 'orderNow']);
Route::post('/orderplace', [HomeController::class, 'orderPlace']);
Route::get('/orderlist', [HomeController::class, 'orderList']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
