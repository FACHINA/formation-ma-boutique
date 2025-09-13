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

    public function supprimer($id)
    {
        $abonne = Abonne::findOrFail($id);
        $abonne->delete();
        return redirect()->route('admin.abonne.liste')
            ->with('success', "L'abonné a bien été supprimé");
    }
}
