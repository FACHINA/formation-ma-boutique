<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    public function liste()
    {
        $categories = Categorie::all();

        return view('admin.categorie.liste', [
            'categories' => $categories,
        ]);
    }

    public function ajouter()
    {
        return view('admin.categorie.ajouter');
    }

    public function ajouter_post(Request $request)
    {
        // Faire le traitement
        $data = $request->validate([
            'nom' => ['string', 'min:3'],
            'description' => ['nullable', 'max:1024'],
        ]);

        $data['slug'] = Str::slug($data['nom']);

        Categorie::create($data);

        return redirect()->route('admin.categorie.liste');
    }

    public function modifier($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('admin.categorie.modifier', [
            'categorie' => $categorie,
        ]);
    }

    public function modifier_post(Request $request, $id)
    {

        $categorie = Categorie::findOrFail($id);

        // Faire le traitement
        $data = $request->validate([
            'nom' => ['string', 'min:3'],
            'description' => ['nullable', 'max:1024'],
        ]);

        $data['slug'] = Str::slug($data['nom']);

        $categorie->update($data);

        return redirect()->route('admin.categorie.liste');
    }
}
