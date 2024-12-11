<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Museum;
use App\Models\Wayang;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah museum, berita, dan wayang
        $museumCount = Museum::count();
        $beritaCount = Berita::count();
        $wayangCount = Wayang::count();

        return view('admin.index', [
            'museumCount' => $museumCount,
            'beritaCount' => $beritaCount,
            'wayangCount' => $wayangCount
        ]);
    }
}
