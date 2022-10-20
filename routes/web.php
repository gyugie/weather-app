<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;



Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return redirect()->route('filament.pages.dashboard');
        });

//        Route::view('/', 'dashboard.show')->name('home');
//    Route::get('/payments', \App\Http\Livewire\Payment\Index::class)
//        ->name('payments.index');
//    Route::get('/payments/links', \App\Http\Livewire\Payment\Links\PaymentLinks::class)
//        ->name('payments.link');
//    Route::get('/payments/link/create', \App\Http\Livewire\Payment\Links\CreatePaymentLink::class)
//        ->name('payments.link.create');
//
//    Route::get('developer', \App\Http\Livewire\Developers\Index::class)->name('developer.index');
//    Route::get('developer/apikey', \App\Http\Livewire\Developers\ApiKey::class)->name('developer.apikey');
//
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');
//
    Route::post('logout', LogoutController::class)
        ->name('logout');
});

