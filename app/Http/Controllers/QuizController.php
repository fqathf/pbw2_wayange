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
    $quiz_id = $quiz->id;
    $quiz_title = $quiz->judul; // Mengambil judul kuis

    // Mengambil pertanyaan terkait dengan kuis
    $questions = $quiz->pertanyaan; // Pastikan relasi 'pertanyaans' didefinisikan di model Kuis
    $question_length = $questions->count();


    if (!$quiz) {
        return redirect()->route('quiz.quizzes')->with('error', 'Quiz not found.');
    }

    return view('quiz.show', compact('quiz', 'quiz_title', 'questions', 'question_length', 'quiz_id'));
}

}
