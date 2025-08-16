<?php

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/admin/service', function () {
    $services = Service::all();

    return view('admin.service.liste', [
        'services' => $services,
    ]);
})->name('admin.service.liste');

Route::get('/admin/service/ajouter', function () {
    return view('admin.service.ajouter');
})->name('admin.service.ajouter');

Route::post('/admin/service/ajouter', function (Request $request) {

    $data = $request->validate([
        'titre' => ['required', 'min:3'],
        'resume' => ['required', 'max:255'],
        'description' => ['nullable', 'max:1024'],
        'image' => ['nullable', 'image', 'max:2048'],
    ]);

    $data['slug'] = Str::slug($data['titre']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->storePublicly('images-services', 'public');
    }

    Service::create($data);

    return redirect()->route('admin.service.liste');

})->name('admin.service.ajouter.post');

Route::get('/admin/service/{id}/modifier', function ($id) {

    $service = Service::findOrFail($id);

    return view('admin.service.modifier', [
        'service' => $service,
    ]);

})->name('admin.service.modifier');

Route::post('/admin/service/{id}/modifier', function (Request $request, $id) {

    $service = Service::findOrFail($id);

    $data = $request->validate([
        'titre' => ['required', 'min:3'],
        'resume' => ['required', 'max:255'],
        'description' => ['nullable', 'max:1024'],
        'image' => ['nullable', 'image', 'max:2048'],
    ]);

    $data['slug'] = Str::slug($data['titre']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->storePublicly('images-services', 'public');
    }

    $service->update($data);

    return redirect()->route('admin.service.liste');

})->name('admin.service.modifier.post');
