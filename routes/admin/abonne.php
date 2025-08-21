<?php

use App\Http\Controllers\Admin\AbonneController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/abonne', [AbonneController::class, 'liste'])->name('admin.abonne.liste');
