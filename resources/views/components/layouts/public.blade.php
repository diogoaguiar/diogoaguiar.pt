@props([
    'title' => null,
    'description' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ? $title . ' — Diogo Aguiar' : 'Diogo Aguiar' }}</title>

    @if ($description)
        <meta name="description" content="{{ $description }}">
    @endif

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>document.documentElement.classList.remove('dark')</script>
</head>
<body class="min-h-screen bg-white text-slate-600 antialiased">
    <x-public-navigation />

    <main>
        {{ $slot }}
    </main>

    <x-public-footer />

    @fluxScripts
</body>
</html>
