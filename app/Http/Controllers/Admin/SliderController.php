<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function liste()
    {
        $sliders = Slider::all();

        return view('admin.slider.liste', [
            'sliders' => $sliders,
        ]);
    }

    public function ajouter()
    {
        return view('admin.slider.ajouter');
    }

    public function ajouter_post(Request $request)
    {
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
    }

    public function modifier($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.slider.modifier', [
            'slider' => $slider,
        ]);
    }

    public function modifier_post(Request $request, $id)
    {
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
    }
}
