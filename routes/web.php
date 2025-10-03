<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', function(){
    return view('frontend.about');
})->name('about');
Route::get('/category', function(){
    return view('frontend.category');
})->name('category');
Route::get('/product/details', function(){
    return view('frontend.product-details');
})->name('product.details');
Route::get('/cart', function(){
    return view('frontend.cart');
})->name('cart');
Route::get('/checkout', function(){
    return view('frontend.checkout');
})->name('checkout');
Route::get('/contact', function(){
    return view('frontend.contact');
})->name('contact');
Route::get('/team', function(){
    return view('frontend.team');
})->name('team');

require __DIR__.'/auth.php';
