<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DP Performance Plus - VTT Excellence</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Using Teko for aggressive/custom headers and Inter for readable body text -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Teko:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            /* Light gray/white background */
            color: #0f172a;
        }

        .font-teko {
            font-family: 'Teko', sans-serif;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="antialiased selection:bg-blue-600 selection:text-white">
    <!-- Polaris Style Header Component -->
    <x-header />

    <main>
        <!-- Polaris Style Hero Slider Component -->
        <x-hero />

        <!-- Specialties Grid Section -->
        <x-specialties />

        <!-- Process and Partners Section -->
        <x-process />

        <!-- Testimonials Section -->
        <x-testimonials />
    </main>

    <x-footer />
</body>

</html>