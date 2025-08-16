<?php

use App\Models\Abonne;
use Illuminate\Support\Facades\Route;

Route::get('/admin/abonne', function () {
    $abonnes = Abonne::all();

    return view('admin.abonne.liste', [
        'abonnes' => $abonnes,
    ]);
})->name('admin.abonne.liste');
