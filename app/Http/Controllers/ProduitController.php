<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProduitController extends Controller
{
    public function liste(Request $request)
    {
        $produits = Produit::query()
            ->when(
                $request->query('recherche'),
                function (Builder $query, $recherche) {
                    $query->where('titre', 'LIKE', "%{$recherche}%");
                }
            )
            ->when(
                $request->query('categorie'),
                 function (Builder $query, $recherche) {
                    $query->whereRelation('categorie', 'slug', $recherche);
                }
            )
            ->latest()
            ->paginate(6)
            ->withQueryString();

        $categories = Categorie::all();

        return view('produits', compact('produits', 'categories'));
    }

    public function fiche($slug)
    {
        $produit = Produit::where('slug', $slug)->first();
        if ($produit) {
            return view('produits-fiche', [
                'produit' => $produit,
            ]);
        }
        abort(404);
    }
}
