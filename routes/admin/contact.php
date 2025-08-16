<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/admin/contact', function () {
    $contacts = Contact::all();

    return view('admin.contact.liste', [
        'contacts' => $contacts,
    ]);
})->name('admin.contact.liste');
