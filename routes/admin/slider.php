<?php

use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/slider', [SliderController::class, 'liste'])->name('admin.slider.liste');

Route::get('/admin/slider/ajouter', [SliderController::class, 'ajouter'])->name('admin.slider.ajouter');

Route::post('/admin/slider/ajouter', [SliderController::class, 'ajouter_post'])->name('admin.slider.ajouter.post');

Route::get('/admin/slider/{id}/modifier', [SliderController::class, 'modifier'])->name('admin.slider.modifier');

Route::post('/admin/slider/{id}/modifier', [SliderController::class, 'modifier_post'])->name('admin.slider.modifier.post');
