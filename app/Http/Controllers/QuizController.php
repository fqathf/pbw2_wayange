<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuis;
use App\Models\Pertanyaan;

class QuizController extends Controller
{
    public function show($id)
{
    $quiz = Kuis::with('pertanyaan.jawaban')->find($id);

    if (!$quiz) {
        return redirect()->route('quizzes.index')->with('error', 'Quiz not found.');
    }

    return view('quizzes.show', compact('quiz'));
}

}
