<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Drum Kit</title>
    <link rel="stylesheet" href="{{ asset('css/drum.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>

<body>
  <x-navbar/>
    <h1 id="title">Drum 🥁 Kit</h1>
    <div class="set">
        <button class="w drum" onclick="w()">w</button>
        <button class="a drum" onclick="a()">a</button>
        <button class="s drum" onclick="s()">s</button>
        <button class="d drum" onclick="d()">d</button>
        <button class="j drum" onclick="j()">j</button>
        <button class="k drum" onclick="k()">k</button>
        <button class="l drum" onclick="l()">l</button>
    </div>

    <script>
        function w() {
            let audio = new Audio("{{ asset('sounds/tom-1.mp3') }}");
            audio.play();
        }

        function a() {
            let audio = new Audio("{{ asset('sounds/tom-2.mp3') }}");
            audio.play();
        }

        function s() {
            let audio = new Audio("{{ asset('sounds/tom-3.mp3') }}");
            audio.play();
        }

        function d() {
            let audio = new Audio("{{ asset('sounds/tom-4.mp3') }}");
            audio.play();
        }

        function j() {
            let audio = new Audio("{{ asset('sounds/snare.mp3') }}");
            audio.play();
        }

        function k() {
            let audio = new Audio("{{ asset('sounds/crash.mp3') }}");
            audio.play();
        }

        function l() {
            let audio = new Audio("{{ asset('sounds/kick-bass.mp3') }}");
            audio.play();
        }
    </script>

    <footer>
        Made by fobal
    </footer>
</body>

</html>
