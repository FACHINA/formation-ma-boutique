<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'acceuil'])->name('accueil');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contact_post'])->name('contact.post');

Route::post('/abonnement', [AbonnementController::class, 'abonnement_post'])->name('abonnement.post');

Route::get('/mes-services', [ServiceController::class, 'liste'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'fiche'])->name('services.fiche');

Route::get('/a-propos', [AboutController::class, 'about'])->name('a-propos');

require __DIR__.'/admin.php';
