<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function show($id)
    {
        // Ambil data karakter berdasarkan ID
        $character = Character::findOrFail($id);
        return view('character.show', compact('character'));
    }
}
