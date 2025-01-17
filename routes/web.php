<?php

use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/services', [FrontendController::class, 'services'])->name('services');

Route::get('/profile_page', [FrontendController::class, 'profile_page'])->name('profile_page');

Route::get('/collab', [FrontendController::class, 'collab'])->name('collab');

Route::get('/team', [FrontendController::class, 'team'])->name('team');

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/cart/update/{id}/{quantity}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/cart-count', [CartController::class, 'cartCount']);
Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');



// Halaman profile - hanya bisa diakses oleh yang sudah login
Route::middleware('auth')->get('/profile', [ControllerPage::class, 'profile'])->name('profile');

// Rute untuk autentikasi (Laravel Breeze akan menambahkan ini secara otomatis)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Rute untuk dashboard (Akses hanya untuk yang sudah login)
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rute terkait profile (akses setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ControllerPage::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ControllerPage::class, 'updateProfile'])->name('profile.update');
    Route::delete('/profile', [ControllerPage::class, 'destroyProfile'])->name('profile.destroy');
});

// Halaman logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Rute untuk proses autentikasi
require __DIR__.'/auth.php';

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});


?>