<?php

use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/admin/categorie', function() {
    $categories = Categorie::all();
    return view('admin.categorie.liste', [
        'categories' => $categories
    ]);
})->name('admin.categorie.liste');

Route::get('/admin/categorie/ajouter', function() {
    return view('admin.categorie.ajouter');
})->name('admin.categorie.ajouter');

Route::post('/admin/categorie/ajouter', function(Request $request) {
    // Faire le traitement
    $data = $request->validate([
        'nom' => ['string', 'min:3'],
        'description' => ['nullable', 'max:1024']
    ]);

    $data['slug'] = Str::slug($data['nom']);

    Categorie::create($data);

    return redirect()->route('admin.categorie.liste');
})->name('admin.categorie.ajouter.post');

Route::get('/admin/categorie/{id}/modifier', function($id) {
    $categorie = Categorie::findOrFail($id);
    return view('admin.categorie.modifier', [
        'categorie' => $categorie
    ]);
})->name('admin.categorie.modifier');

Route::post('/admin/categorie/{id}/modifier', function(Request $request, $id) {

    $categorie = Categorie::findOrFail($id);

    // Faire le traitement
    $data = $request->validate([
        'nom' => ['string', 'min:3'],
        'description' => ['nullable', 'max:1024']
    ]);

    $data['slug'] = Str::slug($data['nom']);

    $categorie->update($data);

    return redirect()->route('admin.categorie.liste');
})->name('admin.categorie.modifier.post');
