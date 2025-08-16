<?php

use App\Models\Abonne;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {

    $data = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'nullable|string|max:20',
        'sujet' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Contact::create($data);

    return redirect()->route('contact');
})->name('contact.post');

Route::post('/abonnement', function (Request $request) {

    $data = $request->validate([
        'email-abonne' => ['email', 'unique:abonnes,email'],
    ]);

    Abonne::create([
        'email' => $data['email-abonne'],
    ]);

    return redirect()->back();
})->name('abonnement.post');

Route::get('/mes-services', function () {
    return view('services');
})->name('services');

Route::get('/services/{slug}', function ($slug) {
    $service = Service::where('slug', $slug)->first();

    if ($service) {
        return view('services-fiche', [
            'service' => $service,
        ]);
    }

    abort(404);
})->name('services.fiche');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

require __DIR__.'/admin.php';
