<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Apses Spēks</title>
    </head>
    <body class="antialiased">
        <div id="bannerdiv">
        </div>
        <div class="full"id="navigation">
            <div id="alignment"></div>
            <a>Sākumlapa</a>
            <a>Galerija</a>
            <a>Objekti</a>
            <a>Karte</a>
            <a>Rezervācijas</a>
            <a>Kontakti</a>
        </div>
        {{ $slot }}
    </body>
</html>
