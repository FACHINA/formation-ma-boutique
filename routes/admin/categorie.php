<?php

use App\Http\Controllers\Admin\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/categorie', [CategorieController::class, 'liste'])->name('admin.categorie.liste');
Route::get('/admin/categorie/ajouter', [CategorieController::class, 'ajouter'])->name('admin.categorie.ajouter');
Route::post('/admin/categorie/ajouter', [CategorieController::class, 'ajouter_post'])->name('admin.categorie.ajouter.post');
Route::get('/admin/categorie/{id}/modifier', [CategorieController::class, 'modifier'])->name('admin.categorie.modifier');
Route::post('/admin/categorie/{id}/modifier', [CategorieController::class, 'modifier_post'])->name('admin.categorie.modifier.post');
