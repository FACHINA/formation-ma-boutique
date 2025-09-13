<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ServiceController extends Controller
{
    public function liste(Request $request)
    {
        $services = Service::query()
            ->when(
                $request->query('recherche'),
                function (Builder $query, $recherche) {
                    $query->where('titre', 'LIKE', "%{$recherche}%");
                }
            )
            ->latest()
            ->paginate(6)
            ->withQueryString();
            
        return view('services', compact('services'));
    }

    public function fiche($slug)
    {
        $service = Service::where('slug', $slug)->first();

        if ($service) {
            return view('services-fiche', [
                'service' => $service,
            ]);
        }

        abort(404);
    }
}
