<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index', [
            'listKategori' => Kategori::all()
        ]);
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $kategoriRequest)
    {
        $validateKategori = $kategoriRequest->validate([
            'nama_kategori' => 'required'
        ]);
        Kategori::create($validateKategori);

        return redirect()->route('kategori.index')->with('success', 'Kategori created successfully.');
    }

    public function edit($id_k)
    {
        $kategori = Kategori::find($id_k);
        return view('admin.kategori.update', ['kategori' => $kategori]);
    }


    public function update(Request $kategoriRequest, $id_k)
{
    $validateKategori = $kategoriRequest->validate([
        'nama_kategori' => 'required'
    ]);

    Kategori::where('id_k', $id_k)->update($validateKategori);

    return redirect()->route('kategori.index')->with('success', 'Kategori updated successfully.');
}


    public function destroy($id)
    {
        Kategori::where('id_k', $id)->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori deleted successfully.');
    }

    public function search(Request $kategoriRequest)
    {
        $listKategori = Kategori::where('nama_kategori', 'like', '%' . $kategoriRequest->search . '%')->get();
        return view('admin.kategori.index', [
            'listKategori' => $listKategori
        ]);
    }
}
