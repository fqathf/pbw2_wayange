<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museum;
use Illuminate\Support\Facades\Storage;

class MuseumController extends Controller
{
    public function index()
    {
        $listMuseum = Museum::all();
        return view('admin.museum.index', [
            'listMuseum' => $listMuseum
        ]);
    }

    public function create()
    {
        return view('admin.museum.create');
    }

    public function store(Request $museumRequest)
    {
        $validateMuseum = $museumRequest->validate([
            'nama_museum' => 'required',
            'daerah_museum' => 'required',
            'judul_museum' => 'required',
            'isi_museum' => 'required',
            'gambar_museum' => 'required|image|file|max:2048',
        ]);

        if ($museumRequest->hasFile('gambar_museum')) {
            $validateMuseum['gambar_museum'] = $museumRequest->file('gambar_museum')->store('gambar-museum', 'public');
        }

        Museum::create($validateMuseum);

        return redirect()->route('admin.museum.index')->with('success', 'Museum created successfully.');
    }


    public function edit($id)
    {
        $museum = Museum::find($id);
        return view('admin.museum.update', [
            'museum' => $museum
        ]);
    }

    public function update(Request $museumRequest, $id)
    {
        $validateMuseum = $museumRequest->validate([
            'nama_museum' => 'required',
            'daerah_museum' => 'required',
            'judul_museum' => 'required',
            'isi_museum' => 'required',
            'gambar_museum' => 'nullable|image|file|max:2048',
        ]);

        if ($museumRequest->file('gambar_museum')) {
            $museum = Museum::find($id);
            if ($museum->gambar_museum) {
                Storage::disk('public')->delete($museum->gambar_museum);
            }
            $validateMuseum['gambar_museum'] = $museumRequest->file('gambar_museum')->store('gambar-museum', 'public');
        }

        Museum::find($id)->update($validateMuseum);

        return redirect()->route('admin.museum.index')->with('success', 'Museum updated successfully.');
    }

    public function destroy($id)
    {
        $museum = Museum::find($id);

        if ($museum->gambar_museum) {
            Storage::disk('public')->delete($museum->gambar_museum);
        }

        $museum->delete();

        return redirect()->route('admin.museum.index')->with('success', 'Museum deleted successfully.');
    }

    public function indexUser()
    {
        $listMuseum = Museum::all();
        return view('Museum.display', [
            'listMuseum' => $listMuseum
        ]);
    }
}
