<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $listBerita = Berita::all();
        return view('admin.berita.index', [
            'listBerita' => $listBerita
        ]);
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $beritaRequest)
    {
        $validateBerita = $beritaRequest->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'tanggal_berita' => 'required|date',
            'penulis_berita' => 'required',
            'gambar_berita' => 'required|image|file|max:2048',
        ]);

        if ($beritaRequest->hasFile('gambar_berita')) {
            $validateBerita['gambar_berita'] = $beritaRequest->file('gambar_berita')->store('gambar-berita', 'public');
        }

        Berita::create($validateBerita);

        return redirect()->route('berita.index')->with('success', 'Berita created successfully.');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.update', [
            'berita' => $berita
        ]);
    }

    public function update(Request $beritaRequest, $id)
    {
        $validateBerita = $beritaRequest->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'tanggal_berita' => 'required|date',
            'penulis_berita' => 'required',
            'gambar_berita' => 'nullable|image|file|max:2048',
        ]);

        if ($beritaRequest->file('gambar_berita')) {
            $berita = Berita::find($id);
            if ($berita->gambar_berita) {
                Storage::disk('public')->delete($berita->gambar_berita);
            }
            $validateBerita['gambar_berita'] = $beritaRequest->file('gambar_berita')->store('gambar-berita', 'public');
        }

        Berita::find($id)->update($validateBerita);

        return redirect()->route('berita.index')->with('success', 'Berita updated successfully.');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);

        if ($berita->gambar_berita) {
            Storage::disk('public')->delete($berita->gambar_berita);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita deleted successfully.');
    }

    public function indexUser()
    {
        $listBerita = Berita::all();
        return view('berita.index', [
            'listBerita' => $listBerita
        ]);
    }
}
