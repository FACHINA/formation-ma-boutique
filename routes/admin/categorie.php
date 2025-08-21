<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/admin/categorie', [CategorieController::class, 'liste'])->name('admin.categorie.liste');
Route::get('/admin/categorie/ajouter', [CategorieController::class, 'ajouter'])->name('admin.categorie.ajouter');
Route::post('/admin/categorie/ajouter', [CategorieController::class, 'ajouter_post'])->name('admin.categorie.ajouter.post');
Route::get('/admin/categorie/{id}/modifier', [CategorieController::class, 'modifier'])->name('admin.categorie.modifier');
Route::post('/admin/categorie/{id}/modifier', [CategorieController::class, 'modifier_post'])->name('admin.categorie.modifier.post');
