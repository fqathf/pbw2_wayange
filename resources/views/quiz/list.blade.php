<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuis</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="quiz-container">
        <h1>Daftar Kuis</h1>
        <ul>
            @if ($quizzes->isEmpty())
                <li>Tidak ada kuis yang tersedia.</li>
            @else
                @foreach ($quizzes as $quiz)
                    <li><a href="{{ route('quiz.show', ['id' => $quiz->id]) }}">{{ $quiz->judul }}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</body>
</html>
