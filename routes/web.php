<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\ImageUploadController;


Route::get('/', function () {
    return view ('welcome');
});

// Route untuk verifikasi email
Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');


//page link section
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/main_menu', function () {
    return view('main_menu');
})->name('main_menu');

Route::get('/cobacoba', function () {
    return view("cobacoba");
})->name('cobacoba');


//image upload section
// Route::get('/upload', [ImageUpload::class, 'showForm'])->name('image.form');
// Route::post('/upload', [ImageUpload::class, 'upload'])->name('image.upload');
// Route::get('/images', [ImageUpload ::class, 'listImages'])->name('images.list');