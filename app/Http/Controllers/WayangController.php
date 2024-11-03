<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Wayang;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Storage;


class WayangController extends Controller
{
    public function index()
    {
        $listWayang = Wayang::with('kategori')->get();
        return view('wayang.index', compact('listWayang'));
    }


    public function create()
    {
        $listKategori = Kategori::all();
        $listWayang = Wayang::all();
        return view('wayang.create', [
            'listKategori' => $listKategori,
            'listWayang' => $listWayang
        ]);
    }

    public function store(Request $wayangRequest)
    {
        $validateWayang = $wayangRequest->validate([
            'nama_wayang' => 'required',
            'judul_wayang' => 'required',
            'isi_wayang' => 'required',
            'gambar_wayang' => 'required|image|file|max:2048',
            'id_kategori' => 'required',
        ]);

        if ($wayangRequest->file('gambar_wayang')) {
            $validateWayang['gambar_wayang'] = $wayangRequest->file('gambar_wayang')->store('gambar-wayang', 'public');
        }

        Wayang::create($validateWayang);

        return redirect()->route('wayang.index')->with('success', 'Wayang created successfully.');
    }

    public function edit($id)
    {   
        return view('wayang.update', [
            'listWayang' => Wayang::find($id),
            'listKategori' => Kategori::all()
        ]);
    }

    public function update(Request $wayangRequest, $id)
    {
        $validateWayang = $wayangRequest->validate([
            'nama_wayang' => 'nullable',
            'judul_wayang' => 'nullable',
            'isi_wayang' => 'nullable',
            'gambar_wayang' => 'nullable|image|file|max:2048',
            'id_kategori' => 'nullable',
        ]);

        if ($wayangRequest->file('gambar_wayang')) {
            if ($wayangRequest->old_gambar_wayang) {
                Storage::delete($wayangRequest->old_gambar_wayang);
            }
            $validateWayang['gambar_wayang'] = $wayangRequest->file('gambar_wayang')->store('gambar-wayang', 'public');
        }

        Wayang::find($id)->update($validateWayang);

        return redirect()->route('wayang.index')->with('success', 'Wayang updated successfully.');
    }

    public function destroy($id)
    {
        $listWayang = Wayang::find($id);

        if ($listWayang->gambar_wayang) {
            Storage::delete('gambar-wayang/' . basename($listWayang->gambar_wayang));
        }

        $listWayang->delete();
        Wayang::destroy($id);

        return redirect()->route('wayang.index')->with('success', 'Wayang deleted successfully.');
    }
}
