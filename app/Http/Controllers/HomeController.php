<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    public function acceuil()
    {
        $sliders = Slider::all();
        $services = Service::latest()->limit(6)->get();

        return view('accueil', compact('sliders', 'services'));
    }
}
