<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>

    @auth
    sudah login
    @endauth

    @guest
    <div class="flex flex-col items-center justify-center h-screen gap-8">
        <div class="font-semi-bold text-xl">{{ config('app.name') }}</div>
        {{ $slot }}
        @if(Route::is('login'))
        <a href="{{ route('register') }}" class="text-sm link" wire:navigate>Belum Punya Akun? Daftar Sekarang!</a>
        @else
        <a href="{{ route(('login')) }}" class="text-sm link" wire:navigate>Sudah Punya Akun? Login Sekarang</a>
        @endif
    </div>
    @endguest
    @livewireScripts
</body>
</html>
