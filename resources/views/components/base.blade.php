<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Apses Spēks</title>
        <link rel="icon" type="image/x-icon" href="{{asset('storage/images/favicon.ico')}}">
    </head>
    <body class="antialiased">
        <div id="topsection">
            <div id="bannerdiv"><img src="{{asset('storage/images/logo.png')}}" alt="logo" id="logo"></div>
            <nav id="navigation">
                <div id="navspacer"></div>
                <a class="leftnav" href="/">Sākumlapa</a>
                <a class="leftnav" href="#">Galerija</a>
                <a class="leftnav" href="#">Objekti</a>
                <a class="leftnav" href="#">Karte</a>
                <a class="leftnav" href="/raksti">Vērtības</a>
                <a class="leftnav" href="#">Rezervācijas</a>
                <a>Kontakti</a>
            </nav>
        </div>
        <div id="topspacer"></div>
        {{ $slot }}
    </body>
</html>
