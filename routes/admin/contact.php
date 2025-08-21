<?php

use App\Http\Controllers\Admin\ContactController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/admin/contact', [ContactController::class, 'liste'])->name('admin.contact.liste');
