<?php

use App\Http\Controllers\Admin\ProduitController;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/admin/produit', [ProduitController::class, 'liste'])->name('admin.produit.liste');
Route::get('/admin/produit/ajouter', [ProduitController::class, 'ajouter'])->name('admin.produit.ajouter');
Route::post('/admin/produit/ajouter', [ProduitController::class, 'ajouter_post'])->name('admin.produit.ajouter.post');
Route::get('/admin/produit/{id}/modifier', [ProduitController::class, 'modifier'])->name('admin.produit.modifier');
Route::post('/admin/produit/{id}/modifier', [ProduitController::class, 'modifier_post'])->name('admin.produit.modifier.post');
