<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abonne;

class AbonneController extends Controller
{
    public function liste()
    {
        $abonnes = Abonne::all();

        return view('admin.abonne.liste', [
            'abonnes' => $abonnes,
        ]);
    }
}
