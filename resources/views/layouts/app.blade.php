<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f6f4">
    <meta name="description" content="@yield('description', 'Net FusionID adalah partner teknologi digital untuk website development, IT workshop, dan IT training.')">
    <meta property="og:title" content="Net FusionID — Partner Teknologi Digital Anda">
    <meta property="og:description" content="Kembangkan website, kemampuan teknis tim, dan keterampilan digital bersama Net FusionID.">
    <meta property="og:type" content="website">
    <title>@yield('title', 'Net FusionID — Partner Teknologi Digital Anda')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-paper font-body text-ink antialiased">
    <a class="sr-only focus:not-sr-only focus:fixed focus:left-3 focus:top-3 focus:z-50 focus:bg-white focus:px-4 focus:py-3" href="#main">Lewati ke konten</a>
    <x-navbar />
    <main id="main">@yield('content')</main>
    <x-footer />
</body>
</html>
