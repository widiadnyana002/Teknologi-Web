<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- karena template untuk frontpage, silakan Lengkapi meta tag yang lain untuk SEO --
}}
    {{-- nama web sesuai konfigurasi, dapat juga dibuat dinamis --}}
    <title>AA Bread</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;6
00;700&display=swap">
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- karena terjadi maslah pada instalasi tailwind, shg masih menggunakan CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/twelements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet"/>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.0/tailwind.min.css"
      integrity="sha256-CAI/7ThhltsmP2L2zKBYa7FknB3ZwFbD0nqL8FCdxdc="
      crossorigin="anonymous"
    />
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigationhome')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>



</html>