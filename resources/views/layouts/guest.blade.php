<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Grosir Ledger Pro') }} - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-primary-gradient {
            background: linear-gradient(135deg, #005bbf 0%, #1a73e8 100%);
        }
        .shadow-indigo {
            box-shadow: 0 10px 30px -5px rgba(67, 85, 185, 0.08);
        }
    </style>
</head>
<body class="bg-background font-body text-on-surface selection:bg-primary-fixed selection:text-primary min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <span class="text-3xl font-extrabold tracking-tighter text-primary font-headline">Toko Jasa Grosir</span>
            <p class="text-on-surface-variant mt-2">Institutional Wholesale Management Platform</p>
        </div>
        
        <div class="bg-surface-container-lowest rounded-2xl shadow-indigo p-8 border border-white/50">
            @yield('content')
        </div>
        
        <div class="text-center mt-8 text-on-surface-variant text-sm">
            &copy; 2026 Toko Jasa Grosir AI. v2.4.0-Architect
        </div>
    </div>
</body>
</html>
