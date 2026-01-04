<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Apses Spēks') }}</title>
        <link rel="icon" type="image/x-icon" href="{{asset('storage/images/favicon.ico')}}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @auth
            <div id="auth-message">
                {{ucfirst(__('special.auth_message'))}} {{ Auth::user()->email }} 
                <a href="{{ route('auth.index') }}">{{ucfirst(trans_choice('User', 2))}}</a>
                <form action="{{ route('logout')}}" method="POST" class="nothing">
                    @csrf
                    <button>{{ucfirst(__('Logout'))}}</button>
                </form>
            </div>
        @endauth
        <div id="topsection">
            <div>
                <a href={{route('localization', 'lv')}}>LV</a>
                <a href={{route('localization', 'et')}}>EST</a>
                <a href={{route('localization', 'en')}}>EN</a>
            </div>
            <div id="bannerdiv"><img src="{{asset('storage/images/logo.png')}}" alt="logo" id="logo"></div>
            <nav id="navigation">
                <div id="navspacer"></div>
                <a class="leftnav" href="/">{{ucfirst(__('special.homepage'))}}</a>
                <a class="leftnav" href={{route('shop.index')}}>{{ucfirst(__('special.shop'))}}</a>
                <a class="leftnav" href="{{route('gallery.index')}}">{{ucfirst(__('special.gallery'))}}</a>
                <a class="leftnav" href={{route('objekti.index')}}>{{ucfirst(trans_choice('special.object', 2))}}</a>
                <!--<a class="leftnav" href="#">Karte</a>-->
                <a class="leftnav" href={{route('blog.index')}}>{{ucfirst(__('special.blog'))}}</a>
                <!--<a class="leftnav" href="/rezervacijas">Rezervācijas</a>-->
                <a href="/kontakti">{{ucfirst(__('special.contacts'))}}</a>
            </nav>
        </div>
        <div id="topspacer"></div>
        {{ $slot }}
    </body>
</html>
