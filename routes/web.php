<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProduitController;

Route::get('/', [HomeController::class, 'home'])->name('app_home');
Route::get('/about', [HomeController::class, 'about'])->name('app_about');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/register', function () {
        return view('auth.register');  
    })->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('app_logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Other routes
Route::resource('produits', ProduitController::class);
Route::get('produits/{id}/edit', [ProductController::class, 'edit'])->name('produits.edit');
Route::put('produits/{id}', [ProductController::class, 'update'])->name('produits.update');
Route::get('acceuil', function () {
    return view('acceuil');
})->name('principale');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('verifier', [HomeController::class, 'verifier'])->name('verification');
