<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/player-registration', [IndexController::class, 'playerRegistration'])->name('player-registration');

Route::post('/player-registration', [IndexController::class, 'playerRegistrationPost'])->name('player-registration');

Route::get('/stores-distributors', [IndexController::class, 'storesDistributors'])->name('stores-distributors');
Route::post('/stores-distributors', [IndexController::class, 'storesDistributorsPost'])->name('stores-distributors');

Route::get('/games', [IndexController::class, 'games'])->name('games');
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [IndexController::class, 'termsConditions'])->name('terms-conditions');

Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [IndexController::class, 'contactUsPost'])->name('contact-us');

Auth::routes(['verify' => true]);
Route::get('/results/{id}', [IndexController::class, 'results'])->name('results');
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('download-file/{id}', [IndexController::class, 'downloadFile'])->name('download.file');
