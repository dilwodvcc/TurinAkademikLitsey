<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function index()
    {
        $homes = HomeSlider::all();
        return view('home', compact('homes'));
    }
}
