<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [HomeController::class, 'admin'])->name('admin.dashboard');

require __DIR__.'/admin/abonne.php';
require __DIR__.'/admin/categorie.php';
require __DIR__.'/admin/contact.php';
require __DIR__.'/admin/produit.php';
require __DIR__.'/admin/service.php';
require __DIR__.'/admin/slider.php';
