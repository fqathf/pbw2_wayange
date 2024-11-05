<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return view('wayangmvp.index', [
            'listKategori' => Kategori::all()
        ]);
    }
}
