<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;

Route::get('/', [ContactController::class, 'show'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route de test pour l'email (à supprimer après test)
Route::get('/test-email', function () {
    try {
        Mail::raw('Test email depuis Laravel', function ($message) {
            $message->to('omaramri7du34@gmail.com')
                   ->subject('Test Email Laravel');
        });
        return 'Email de test envoyé avec succès !';
    } catch (\Exception $e) {
        return 'Erreur : ' . $e->getMessage();
    }
});