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
        
        return view('quiz.list', [
            'quizzes' => $quizzes,
        ]);
    }
}
