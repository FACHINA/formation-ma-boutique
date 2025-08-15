<?php

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/admin/produit", function () {
    $produits = Produit::all();
    return view("admin.produit.liste", [
        'produits' => $produits,
    ]);
})->name("admin.produit.liste");

Route::get("/admin/produit/ajouter", function () {
    $categories = Categorie::all();
    return view("admin.produit.ajouter", [
        'categories' => $categories
    ]);
})->name("admin.produit.ajouter");

Route::post("/admin/produit/ajouter", function (Request $request) {

    $data = $request->validate([
        'titre' => ['required', 'min:3'],
        'prix' => ['required', 'numeric', 'min:500', 'max:1000000'],
        'resume' => ['required', 'max:255'],
        'description' => ['nullable', 'max:1024'],
        'image' => ['nullable', 'image', 'max:2048'],
        'categorie_id' => ['required', 'exists:categories,id']
    ]);

    $data["slug"] = Str::slug($data["titre"]);

    if ($request->hasFile('image')) {
        $data["image"] = $request->file('image')->storePublicly('images-produits', 'public');
    }

    Produit::create($data);

    return redirect()->route("admin.produit.liste");
})->name("admin.produit.ajouter.post");

Route::get('/admin/produit/{id}/modifier', function ($id) {

    $produit = Produit::findOrFail($id);

    return view('admin.produit.modifier', [
        'produit' => $produit
    ]);
})->name('admin.produit.modifier');

Route::post("/admin/produit/{id}/modifier", function (Request $request, $id) {

    $produit = Produit::findOrFail($id);

    $data = $request->validate([
        'titre' => ['required', 'min:3'],
        'prix' => ['required', 'numeric', 'min:500', 'max:1000000'],
        'resume' => ['required', 'max:255'],
        'description' => ['nullable', 'max:1024'],
        'image' => ['nullable', 'image', 'max:2048'],
        'categorie_id' => ['required', 'exists:categories,id']
    ]);

    $data["slug"] = Str::slug($data["titre"]);

    if ($request->hasFile('image')) {
        $data["image"] = $request->file('image')->storePublicly('images-produits', 'public');
    }

    $produit->update($data);

    return redirect()->route("admin.produit.liste");
})->name("admin.produit.modifier.post");
