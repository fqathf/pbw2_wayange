<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizResultController extends Controller
{
    public function showResult(Request $request)
    {
        $quiz_id = intval($request->input('id_kuis'));
        $answers = $request->except('id_kuis');
        $total_score = 0;

        foreach ($answers as $key => $answer) {
            if (strpos($key, 'q') === 0) {
                $total_score += intval($answer);
            }
        }

        $characterTypes = [
            1 => 'Gatotkaca',
            2 => 'Yudhistira',
            3 => 'Arjuna',
            4 => 'Srikandi'
        ];

        $characterImages = [
            1 => 'gatotkaca.webp',
            2 => 'yudistira.webp',
            3 => 'arjuna.webp',
            4 => 'srikandi.webp'
        ];

        $characterLink = [
            1 => route('character.show', ['id' => 5]),
            2 => route('character.show', ['id' => 13]),
            3 => route('character.show', ['id' => 1]),
            4 => route('character.show', ['id' => 14]),
        ];

        $characterIndex = round($total_score / (count($answers) ?: 1)); // pastikan tidak membagi dengan 0
        $character = $characterTypes[$characterIndex] ?? 'Tidak diketahui';

        return view('quiz.result', [
            'character' => $character,
            'characterImage' => $characterImages[$characterIndex] ?? 'default.webp',
            'characterLink' => $characterLink[$characterIndex] ?? '#'
        ]);
    }
}
