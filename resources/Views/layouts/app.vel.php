<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <!-- Primary Meta Tags -->
        <title>@yield('title')</title>
        <meta name="title" content="VeltoPHP V2.0 – Lightweight Fullstack PHP Framework">
        <meta name="description" content="VeltoPHP is a lightweight fullstack PHP framework designed for building simple yet powerful web applications. Built with an intuitive HMVC structure, it's developer-friendly and ready for both backend and frontend projects.">
    
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://veltophp.com/">
        <meta property="og:title" content="VeltoPHP V2.0 – Lightweight Fullstack PHP Framework">
        <meta property="og:description" content="VeltoPHP is a simple yet powerful PHP framework for developing web apps with a clear and modular HMVC structure.">
        <meta property="og:image" content=@yield('ogImage','https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png')>

        {{-- script for emoji  --}}
        <script src="https://unpkg.com/@joeattardi/emoji-button@4.6.0/dist/index.js"></script>

        <!-- Prism.js CSS (Theme: Okaidia) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />

        <!-- Prism.js Core -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>

        <!-- Prism.js Autoloader (untuk otomatis load language components) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- CSS Style  --}}
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <body>
        {{-- navbar component --}}
        @component('app-navbar')

        {{-- content  --}}
        @yield('app-content')

        {{-- footer --}}
        @component('app-footer')

        {{-- flash alerts --}}
        @component('alerts')

        {{-- Java script --}}
        <script type="module" src="/assets/js/script.js"></script>
    </body>
    
</html>