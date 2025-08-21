<?php

use App\Http\Controllers\Admin\HomeController;
use App\Models\Abonne;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Produit;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [HomeController::class, 'admin'])->name('admin.dashboard');

require __DIR__ . '/admin/abonne.php';
require __DIR__ . '/admin/categorie.php';
require __DIR__ . '/admin/contact.php';
require __DIR__ . '/admin/produit.php';
require __DIR__ . '/admin/service.php';
require __DIR__ . '/admin/slider.php';
