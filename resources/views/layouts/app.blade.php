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
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Navbar -->
            <nav class="navbar w-full bg-base-300">
                <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <!-- Sidebar toggle icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor" class="my-1.5 inline-block size-4">
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 4v16"></path>
                        <path d="M14 10l2 2l-2 2"></path>
                    </svg>
                </label>
                <div class="px-4">Contacts</div>
            </nav>
            <!-- Page content here -->
            <div class="p-4">
                {{ $slot }}
            </div>
        </div>
        @livewire('partials.sidebar')
    </div>
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
