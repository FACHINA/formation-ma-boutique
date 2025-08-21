<?php

use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/service', [ServiceController::class, 'liste'])->name('admin.service.liste');
Route::get('/admin/service/ajouter', [ServiceController::class, 'ajouter'])->name('admin.service.ajouter');
Route::post('/admin/service/ajouter', [ServiceController::class, 'ajouter_post'])->name('admin.service.ajouter.post');
Route::get('/admin/service/{id}/modifier', [ServiceController::class, 'modifier'])->name('admin.service.modifier');
Route::post('/admin/service/{id}/modifier', [ServiceController::class, 'modifier_post'])->name('admin.service.modifier.post');
