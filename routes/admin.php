<?php

use App\Models\Abonne;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Produit;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {

    $nbServices = Service::count();
    $nbProduits = Produit::count();
    $nbCategorieProduits = Categorie::count();

    $nbAbonnes = Abonne::count();
    $nbMessages = Contact::count();

    $nbAbonnesToday = Abonne::query()
        ->whereBetween(
            'created_at',
            [
                now()->startOfDay(),
                now()->endOfDay(),
            ]
        )
        ->count();

    $nbMessagesToday = Contact::query()
        ->whereBetween(
            'created_at',
            [
                now()->startOfDay(),
                now()->endOfDay(),
            ]
        )
        ->count();

    return view('admin.index', compact(
        'nbServices',
        'nbProduits',
        'nbCategorieProduits',
        'nbAbonnes',
        'nbMessages',
        'nbAbonnesToday',
        'nbMessagesToday'
    ));
})->name('admin.dashboard');

require __DIR__.'/admin/abonne.php';
require __DIR__.'/admin/categorie.php';
require __DIR__.'/admin/contact.php';
require __DIR__.'/admin/produit.php';
require __DIR__.'/admin/service.php';
require __DIR__.'/admin/slider.php';
