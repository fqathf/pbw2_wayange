<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz_title }}</title>
    <link rel="stylesheet" href="{{ asset('output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-wayang.svg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    @include('components.navbar')
    <div class="w-screen min-h-screen flex justify-center items-center pt-40 sm:pt-0">
        <form id="quizForm" class="w-full mx-6 sm:w-screen sm:mx-20" action="{{ route('quiz.result') }}" method="post">
            @csrf
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <div class="relative overflow-hidden md:h-[29rem] h-screen rounded-lg border mb-3">
                    @foreach ($questions as $question)
                        <div class="question hidden duration-200 ease-linear" data-carousel-item>
                            <p class="text-black text-[32px] font-bold font-[playfair] mx-8 my-8">{{ $question->teks_pertanyaan }}</p>
                            <ul class="flex flex-col justify-start max-w-full mx-8">
                                @foreach ($question->jawaban as $answer)
                                    <li>
                                        <input id="q{{ $answer->id }}" type="radio" class="hidden peer" name="q{{ $question->id }}" value="{{ $answer->nilai }}">
                                        <label for="q{{ $answer->id }}" class="inline-flex items-center justify-between w-full p-5 text-black font-bold font-[manrope] transition-colors bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:bg-[#F1E7E1] peer-checked:text-[#653312] hover:text-gray-600 hover:bg-gray-100">
                                            {{ $answer->teks_jawaban }}
                                        </label>
                                    </li>
                                    <br>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-row justify-between">
                    <div>
                        <button type="button" id="button-prev" class="px-3 py-2 border rounded-lg bg-[#653312] hover:opacity-90 transition-opacity" data-carousel-prev onclick="buttonPrevFunc()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" viewBox="0 0 16 25" fill="none">
                                <path d="M6.40546 12.7252L15.8874 22.2069L13.1783 24.916L0.987305 12.7252L13.1783 0.53418L15.8874 3.24328L6.40546 12.7252Z" fill="#E8E3D4"/>
                            </svg>
                        </button>
                        <button type="button" id="button-next" class="px-3 py-2 border rounded-lg bg-[#653312] hover:opacity-90 transition-opacity" data-carousel-next onclick="buttonNextFunc()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" viewBox="0 0 16 25" fill="none">
                                <path d="M9.92169 12.7255L0.439731 3.24374L3.14881 0.534661L15.3398 12.7255L3.1488 24.9165L0.439729 22.2074L9.92169 12.7255Z" fill="#E8E3D4"/>
                            </svg>
                        </button>
                        <!-- <script>
                            let cPosition = 0;
                            let cButtonPrev = document.getElementById('button-prev');
                            let cButtonNext = document.getElementById('button-next');
                            let questionLength = {{ $question_length }};
                            function updateButtons() {
                                if (cPosition === 0) {
                                    cButtonPrev.classList.add('hidden');
                                } else {
                                    cButtonPrev.classList.remove('hidden');
                                }
                                if (cPosition >= questionLength - 1) {
                                    cButtonNext.classList.add('hidden');
                                } else {
                                    cButtonNext.classList.remove('hidden');
                                }
                            }
                            function buttonPrevFunc() { /* Function code */ }
                            function buttonNextFunc() { /* Function code */ }
                            updateButtons();
                        </script> -->
                    </div>
                    <input type="hidden" name="id_kuis" value="{{ $quiz_id }}">
                    <input class="cursor-pointer py-2 px-3 bg-[#653312] rounded-lg text-white font-bold font-[manrope] hover:opacity-90 transition-opacity" type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
    <script>
    let cPosition = 0;
    let cButtonPrev = document.getElementById('button-prev');
    let cButtonNext = document.getElementById('button-next');
    let questionLength = 5;
    function updateButtons() {
        if (cPosition === 0) {
            cButtonPrev.classList.add('hidden');
        } else {
            cButtonPrev.classList.remove('hidden');
        }
        if (cPosition >= questionLength - 1) {
            cButtonNext.classList.add('hidden');
        } else {
            cButtonNext.classList.remove('hidden');
        }
    }
    function buttonPrevFunc() { /* Function code */ }
    function buttonNextFunc() { /* Function code */ }
    updateButtons();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('script/navFunc.js') }}"></script>
</body>
</html>
