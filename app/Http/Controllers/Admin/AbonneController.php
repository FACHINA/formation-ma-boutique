<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\LargeDiffusion;
use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendMessageToAbonne(Request $request)
    {
        $data = $request->validate([
            'sujet' => ['min:3', 'max:200', 'required'],
            'message' => ['min:10', 'max:1024', 'required']
        ]);

        $emails = Abonne::all()->pluck('email');
        $sujet = $data["sujet"];
        $message = $data["message"];

        Mail::send(new LargeDiffusion($emails->toArray(), $sujet, $message));

        return redirect()->back()->with('La diffusion à été éffectué');
    }
}
