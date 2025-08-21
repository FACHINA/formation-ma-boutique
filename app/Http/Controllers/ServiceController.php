<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function liste()
    {
        return view('services');
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
