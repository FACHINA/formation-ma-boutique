<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

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

        $mailable = new Mailable();
        $mailable->subject("Bienvenue dans notre newsletter")
            ->from("contact@maboutique.bj", "Ma boutique")
            ->to($data['email-abonne'])
            ->view('mail.message-abonne', [
                'email' => $data['email-abonne'],
                'sujet' => "Bienvenue dans notre newsletter",
            ]);

        Mail::send($mailable);

        return redirect()->back()
            ->with("success", "Vous êtes bien abonné(e) a notre newsletter");
    }
}
