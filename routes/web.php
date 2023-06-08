<?php

use App\Http\Controllers\MyHomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MyHomeController::class, 'index']);
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/admins', [AdminController::class, 'index'])->middleware('is_admin');
//Route::get('/login', [AdminController::class, 'login'])->name('login');
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
]);
if (!env('ALLOW_REGISTRATION', false)) {
    Route::any('/register', function() {
        return view('error404');
    });
    Route::any('/password/reset', function() {
        return view('error404');
    });
}


Route::get('/home', [MyHomeController::class, 'index'])->name('home');
