<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AbonneController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategorieController;

Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('', [HomeController::class, 'admin'])->name('admin.dashboard');

    Route::get('abonne', [AbonneController::class, 'liste'])->name('admin.abonne.liste');
    Route::post('abonne/envoyez-message', [AbonneController::class, 'sendMessageToAbonne'])->name('admin.abonne.send-message');

    Route::get('categorie', [CategorieController::class, 'liste'])->name('admin.categorie.liste');
    Route::get('categorie/ajouter', [CategorieController::class, 'ajouter'])->name('admin.categorie.ajouter');
    Route::post('categorie/ajouter', [CategorieController::class, 'ajouter_post'])->name('admin.categorie.ajouter.post');
    Route::get('categorie/{id}/modifier', [CategorieController::class, 'modifier'])->name('admin.categorie.modifier');
    Route::post('categorie/{id}/modifier', [CategorieController::class, 'modifier_post'])->name('admin.categorie.modifier.post');
    Route::post('categorie/{id}/supprimer', [CategorieController::class, 'supprimer'])->name('admin.categorie.supprimer');

    Route::get('contact', [ContactController::class, 'liste'])->name('admin.contact.liste');

    Route::get('produit', [ProduitController::class, 'liste'])->name('admin.produit.liste');
    Route::get('produit/ajouter', [ProduitController::class, 'ajouter'])->name('admin.produit.ajouter');
    Route::post('produit/ajouter', [ProduitController::class, 'ajouter_post'])->name('admin.produit.ajouter.post');
    Route::get('produit/{id}/modifier', [ProduitController::class, 'modifier'])->name('admin.produit.modifier');
    Route::post('produit/{id}/modifier', [ProduitController::class, 'modifier_post'])->name('admin.produit.modifier.post');

    Route::get('service', [ServiceController::class, 'liste'])->name('admin.service.liste');
    Route::get('service/ajouter', [ServiceController::class, 'ajouter'])->name('admin.service.ajouter');
    Route::post('service/ajouter', [ServiceController::class, 'ajouter_post'])->name('admin.service.ajouter.post');
    Route::get('service/{id}/modifier', [ServiceController::class, 'modifier'])->name('admin.service.modifier');
    Route::post('service/{id}/modifier', [ServiceController::class, 'modifier_post'])->name('admin.service.modifier.post');

    Route::get('slider', [SliderController::class, 'liste'])->name('admin.slider.liste');
    Route::get('slider/ajouter', [SliderController::class, 'ajouter'])->name('admin.slider.ajouter');
    Route::post('slider/ajouter', [SliderController::class, 'ajouter_post'])->name('admin.slider.ajouter.post');
    Route::get('slider/{id}/modifier', [SliderController::class, 'modifier'])->name('admin.slider.modifier');
    Route::post('slider/{id}/modifier', [SliderController::class, 'modifier_post'])->name('admin.slider.modifier.post');
});
