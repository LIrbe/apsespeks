<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apses Spēks</title>
    </head>
    <body class="antialiased">
        {{ $slot }}
    </body>
</html>
