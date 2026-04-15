<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased flex bg-[#fcfaf5] text-ink selection:bg-ink selection:text-[#fcfaf5]">

    <x-layouts.partials.sidebar />

    <div class="flex-1 ml-64 min-h-screen flex flex-col relative">

        <x-layouts.partials.header />

        <main class="p-8 relative z-10">
            {{ $slot }}
        </main>

        <x-layouts.partials.footer />
    </div>
</body>

</html>
