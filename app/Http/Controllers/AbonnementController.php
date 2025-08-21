<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function abonnement_post(Request $request)
    {

        $data = $request->validate([
            'email-abonne' => ['email', 'unique:abonnes,email'],
        ]);

        Abonne::create([
            'email' => $data['email-abonne'],
        ]);

        return redirect()->back();
    }
}
