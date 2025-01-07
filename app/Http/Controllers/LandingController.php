<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wayang;
use App\Models\Museum;
use App\Models\Berita;

class LandingController extends Controller
{
    public function index()
    {
        // Get 4 specific wayang by IDs
        $wayang = Wayang::whereIn('id', [1, 5, 10, 11])->get();

        // Get 4 specific museum by IDs
        $museum = Museum::whereIn('id', [1, 3, 5, 6])->get();

        // Get 4 berita with the largest IDs
        $berita = Berita::orderBy('id', 'desc')->take(4)->get();

        // Return the data to the view
        return view('landing', [
            'wayang' => $wayang,
            'museum' => $museum,
            'berita' => $berita,
        ]);
    }
}
