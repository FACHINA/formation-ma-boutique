<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function acceuil()
    {
        $sliders = Slider::all();
        $services = Service::latest()->limit(6)->get();
        return view('accueil', compact('sliders', 'services'));
    }
}
