<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuis;

class QuizListController extends Controller
{
    public function index()
    {
        // Mengambil semua kuis
        $quizzes = Kuis::all();
        
        return view('quiz.display', [
            'quizzes' => $quizzes,
        ]);
    }
    public function searchUser(Request $kuisRequest)
    {
        $query = Kuis::query();

        if($kuisRequest->filled('search')){
            $query->where('judul', 'like', "%" . $kuisRequest->search . "%");
        }

        return view('quiz.display', [
            'quizzes' => $query->get()
        ]);
    }
}
