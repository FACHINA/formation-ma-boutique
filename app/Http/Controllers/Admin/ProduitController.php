<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduitController extends Controller
{
    public function liste()
    {
        $produits = Produit::all();

        return view('admin.produit.liste', [
            'produits' => $produits,
        ]);
    }

    public function ajouter()
    {
        $categories = Categorie::all();

        return view('admin.produit.ajouter', [
            'categories' => $categories,
        ]);
    }

    public function ajouter_post(Request $request)
    {

        $data = $request->validate([
            'titre' => ['required', 'min:3'],
            'prix' => ['required', 'numeric', 'min:500', 'max:1000000'],
            'resume' => ['required', 'max:255'],
            'description' => ['nullable', 'max:1024'],
            'image' => ['nullable', 'image', 'max:2048'],
            'categorie_id' => ['required', 'exists:categories,id'],
        ]);

        $data['slug'] = Str::slug($data['titre']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->storePublicly('images-produits', 'public');
        }

        Produit::create($data);

        return redirect()->route('admin.produit.liste')
            ->with('success', "Le produit a bien été ajouté");
    }

    public function modifier($id)
    {

        $produit = Produit::findOrFail($id);
        $categories = Categorie::all();

        return view('admin.produit.modifier', [
            'produit' => $produit,
            'categories' => $categories,
        ]);
    }

    public function modifier_post(Request $request, $id)
    {

        $produit = Produit::findOrFail($id);

        $data = $request->validate([
            'titre' => ['required', 'min:3'],
            'prix' => ['required', 'numeric', 'min:500', 'max:1000000'],
            'resume' => ['required', 'max:255'],
            'description' => ['nullable', 'max:1024'],
            'image' => ['nullable', 'image', 'max:2048'],
            'categorie_id' => ['required', 'exists:categories,id'],
        ]);

        $data['slug'] = Str::slug($data['titre']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->storePublicly('images-produits', 'public');
        }

        $produit->update($data);

        return redirect()->route('admin.produit.liste')
            ->with('success', "Le produit <strong>{$produit->titre}</strong> a bien été modifié");
    }
}
