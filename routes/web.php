<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;

Route::get('/', [ContactController::class, 'show'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
