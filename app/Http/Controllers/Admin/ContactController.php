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
}
