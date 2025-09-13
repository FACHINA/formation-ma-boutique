<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function liste()
    {
        $services = Service::latest()->paginate(5);

        return view('admin.service.liste', [
            'services' => $services,
        ]);
    }

    public function ajouter()
    {
        return view('admin.service.ajouter');
    }

    public function ajouter_post(Request $request)
    {
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

        return redirect()->route('admin.service.liste')
            ->with('success', "Le service a bien été ajouté");
    }

    public function modifier($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.service.modifier', [
            'service' => $service,
        ]);
    }

    public function modifier_post(Request $request, $id)
    {
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

        return redirect()->route('admin.service.liste')
            ->with('success', "Le service <strong>{$service->titre}</strong> a bien été modifié");
    }
}
