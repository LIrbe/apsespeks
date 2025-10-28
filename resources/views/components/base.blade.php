<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

        <title>Apses Spēks</title>
    </head>
    <body class="antialiased">
        <img id="banner">
        <div id="navigation">
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
