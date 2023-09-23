<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('aboutus');
Route::get('/how-it-works', [FrontendController::class, 'howitworks'])->name('howitworks');
Route::get('/arbitrage-investment', [FrontendController::class, 'investment'])->name('investment');
Route::get('/certification', [FrontendController::class, 'certification'])->name('certification');
Route::get('/payment-proofs', [FrontendController::class, 'paymentproofs'])->name('paymentproofs');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/cookies-policy', [FrontendController::class, 'cookies'])->name('cookies');
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contactus');
Route::get('/register', [FrontendController::class, 'signup'])->name('signup');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
