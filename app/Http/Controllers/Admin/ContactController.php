<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function liste()
    {
        $contacts = Contact::all();

        return view('admin.contact.liste', [
            'contacts' => $contacts,
        ]);
    }

    public function supprimer($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contact.liste')
            ->with('success', "Le message a bien été supprimé");
    }
}
