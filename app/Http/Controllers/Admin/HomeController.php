<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Produit;
use App\Models\Service;

class HomeController extends Controller
{
    public function admin()
    {

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
    }
}
