<?php

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/mes-services', function () {
    return view('services');
})->name("services");

Route::get('/services/{slug}', function ($slug) {
    $service = Service::where('slug', $slug)->first();

    if ($service) {
        return view('services-fiche', [
            'service' => $service
        ]);
    }

    abort(404);
})->name("services.fiche");

Route::get('/a-propos', function () {
    return view('a-propos');
})->name("a-propos");

require __DIR__ . '/admin.php';
