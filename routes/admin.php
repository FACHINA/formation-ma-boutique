<?php

use App\Models\Produit;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/admin/service", function() {
    $services = Service::all();
    return view("admin.service.liste", [
        'services' => $services,
    ]);
})->name("admin.service.liste");

Route::get("/admin/service/ajouter", function() {
    return view("admin.service.ajouter");
})->name("admin.service.ajouter");

Route::post("/admin/service/ajouter", function(Request $request) {

    $request->validate([
        'titre' => ['required','min:3'],
        'resume' => ['required', 'max:255'],
        'description' => ['nullable', 'max:1024']
    ]);

    $data = $request->all();
    $data["slug"] = Str::slug($request->input("titre"));
    $data["image"] = $request->file('image')->storePublicly('images-services', 'public');

    Service::create($data);

    return redirect()->route("admin.service.ajouter");

})->name("admin.service.ajouter.post");
