<?php

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

Route::get('/admin/slider', function () {
    $sliders = Slider::all();

    return view('admin.slider.liste', [
        'sliders' => $sliders,
    ]);
})->name('admin.slider.liste');

Route::get('/admin/slider/ajouter', function () {
    return view('admin.slider.ajouter');
})->name('admin.slider.ajouter');

Route::post('/admin/slider/ajouter', function (Request $request) {

    $data = $request->validate([
        'titre' => ['required', 'min:3'],
        'description' => ['nullable', 'max:1024'],
        'image' => ['nullable', 'image', 'max:2048'],
    ]);

    $data['slug'] = Str::slug($data['titre']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->storePublicly('images-sliders', 'public');
    }

    Slider::create($data);

    return redirect()->route('admin.slider.liste');

})->name('admin.slider.ajouter.post');

Route::get('/admin/slider/{id}/modifier', function ($id) {

    $slider = Slider::findOrFail($id);

    return view('admin.slider.modifier', [
        'slider' => $slider,
    ]);

})->name('admin.slider.modifier');

Route::post('/admin/slider/{id}/modifier', function (Request $request, $id) {

    $slider = Slider::findOrFail($id);

    $data = $request->validate([
        'titre' => ['required', 'min:3'],
        'description' => ['nullable', 'max:1024'],
        'image' => ['nullable', 'image', 'max:2048'],
    ]);

    $data['slug'] = Str::slug($data['titre']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->storePublicly('images-sliders', 'public');
    }

    $slider->update($data);

    return redirect()->route('admin.slider.liste');

})->name('admin.slider.modifier.post');
