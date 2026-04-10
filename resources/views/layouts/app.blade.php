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
<body class="bg-background font-body text-on-surface selection:bg-primary-fixed selection:text-primary">
    <!-- Top Navigation Bar -->
    <header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-slate-200/50 shadow-sm flex justify-between items-center px-6 h-16">
        <div class="flex items-center gap-8">
            <span class="text-xl font-bold tracking-tighter text-primary font-headline">Toko Jasa Grosir</span>
            <div class="relative hidden md:block">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
                <input class="bg-surface-container-high border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary w-64 transition-all" placeholder="Search..." type="text">
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 rounded-full hover:bg-slate-50 transition-colors active:scale-95 duration-150">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            </button>
            <button class="p-2 rounded-full hover:bg-slate-50 transition-colors active:scale-95 duration-150">
                <span class="material-symbols-outlined text-on-surface-variant">settings</span>
            </button>
            <div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-white font-bold text-xs">
                JD
            </div>
        </div>
    </header>

    <!-- Side Navigation Bar -->
    <aside class="fixed left-0 top-0 h-full w-64 z-40 bg-slate-50 flex flex-col p-4 pt-20 gap-2 font-inter text-sm font-medium border-r border-slate-200/50">
        <div class="px-4 py-4 mb-2">
            <h2 class="text-xs uppercase tracking-widest text-on-surface-variant font-bold">Management</h2>
            <p class="text-[10px] text-on-surface-variant/60">v2.4.0-Architect</p>
        </div>
        
        <x-sidebar-item icon="shopping_cart" label="Ordering" route="home" />
        <x-sidebar-item icon="inventory_2" label="Catalog" route="home" />
        <x-sidebar-item icon="analytics" label="Reports" route="admin.reports" />
        <x-sidebar-item icon="group" label="Users" route="admin.users" />
        <x-sidebar-item icon="package" label="Products" route="admin.products" />
        <x-sidebar-item icon="science" label="Simulations" route="simulation.min-heap" />
        <x-sidebar-item icon="info" label="About" route="about" />

        <div class="mt-auto border-t border-slate-200/50 pt-4">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-slate-200/50 transition-all duration-200 rounded-lg" href="#">
                <span class="material-symbols-outlined">help</span>
                <span>Support</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-error hover:bg-error-container/20 transition-all duration-200 rounded-lg" href="/login">
                <span class="material-symbols-outlined">logout</span>
                <span>Logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content Workspace -->
    <main class="ml-64 pt-24 pb-12 px-8 min-h-screen">
        <div class="max-w-6xl mx-auto">
            @yield('content')
        </div>
    </main>

    <!-- Floating Action Button for Mobile Context -->
    <div class="md:hidden fixed bottom-6 right-6 z-50">
        <button class="w-14 h-14 bg-primary-gradient rounded-full text-white shadow-xl flex items-center justify-center active:scale-90 transition-transform">
            <span class="material-symbols-outlined text-2xl">add</span>
        </button>
    </div>
</body>
</html>
