<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wayang;
use App\Models\HistoryWayang;

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil data history berdasarkan ID user yang sedang login
        $historyWayang = HistoryWayang::with('wayang')
            ->where('id_a', Auth::id())
            ->get();

        return view('profile', compact('historyWayang'));
    }

    public function storeHistory(Request $request)
    {
        // Validasi data
        $request->validate([
            'history_wayang' => 'required|exists:wayang,id',
        ]);

        // Simpan ke tabel history_wayang
        HistoryWayang::create([
            'id_a' => Auth::id(), // Mendapatkan ID akun pengguna yang sedang login
            'id_w' => $request->history_wayang,
        ]);

        return response()->json(['message' => 'Data saved successfully']);
    }
}
